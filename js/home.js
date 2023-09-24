// Getting my UI functions
import { isJson, showMessage, isLoading} from './UI.js'
import Paginate from './paginatex.js'

// Getting the DOM elements
const homeSearchForm = document.getElementById('homeSearchForm')
const homeSearchType = document.getElementById('homeSearchType')
const homeSearchDate = document.getElementById('homeSearchDate')
const ticketsContainer = document.getElementById('ticketsContainer')

// Functions to Handle Events
async function getHomeSearch(e) {
    e.preventDefault();
    // Check if Type is Selected and date not empty
    if (homeSearchType.value== "none") {
        showMessage("error", "Veuillez choisir le type de Ticket")
    } else if (!homeSearchDate.value) {
           showMessage('error', 'Veuillez choisir une date')
    } else {
        isLoading(ticketsContainer)
        const formData = new FormData()
        formData.append('homeSearchSubmit', "action")
        formData.append('type', homeSearchType.value)
        formData.append('date', homeSearchDate.value)
        postData('./php/tickets/getHomeSearch.inc.php', formData)
        .then((data) => {
            console.log(data);
            if (data.type == "0" && data.tickets.length !== 0) {
                
                const markup = data.tickets.map(
                    (event) => {
                        const details = JSON.parse(event.details)
                        const images = event.img.split(';')
                        /* const company = JSON.parse(
                           sessionStorage.getItem('userPhotos')
                         ).filter((user) => user.id === event.company)[0]*/
                         
                         return `
                 <div class="card my-3 bg-size-cover bg-position-center border-0 overflow-hidden" style="background-image: url(${images[0]});">
                                        <span class="img-gradient-overlay"></span>
                                       
                                        <div class="card-footer content-overlay border-0 pt-0 pb-4">
                                            <div class="d-sm-flex justify-content-between align-items-end pt-5 mt-2 mt-sm-5">
                                                <a href="#" class="text-decoration-none text-light pe-2">
                                                    <div class="fs-sm text-uppercase pt-2 mb-1">
                                                       ${event.date}<br>

                                                    </div>
                                                    <h3 class="h5 text-light mb-1">${event.name}</h3>
                                                    <div class="fs-sm opacity-70">
                                                        <i class="fi-clock me-1"></i>
                                                       ${details.Hour}
                                                    </div>
                                                    <div class="fs-sm opacity-70">
                                                        <i class="fi-map-pin me-1"></i>
                                                          ${details.Place}
                                                    </div>
                                                </a>

                                                <div class="btn-group ms-n2 ms-sm-0 mt-3">
                                                    <a href="#" class="btn btn-primary px-3">$${event.price}</a>

                                                </div>

                                              
                                            </div>
                                        </div>
                                    </div>
                ` }
                )
                const paginate = new Paginate(markup, 1, ticketsContainer)
            }
        })

    }
    
   
}

async function postData(url = '', data = {}) {
   try {
     const response = await fetch(url, {
       method: 'POST',
       body: data,
     })
     return response.json() // parses JSON response into native JavaScript objects
   } catch (error) {
     console.error(`Fetch error: ${error.message}`)
   }
}


homeSearchForm.addEventListener('submit', getHomeSearch)