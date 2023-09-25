// Getting my UI functions
import { isJson, showMessage, isLoading} from './UI.js'
import Paginate from './paginatex.js'

// Getting the DOM elements
const homeSearchForm = document.getElementById('homeSearchForm')
const homeSearchType = document.getElementById('homeSearchType')
const homeSearchDate = document.getElementById('homeSearchDate')
const ticketsContainer = document.getElementById('ticketsContainer')
const busSort = document.getElementById('busSort')
const eventSort = document.getElementById('eventSort')
//const companySort = document.getElementById('companySort')
const destinationFilter = document.getElementById("destinationFilter")
const departureFilter = document.getElementById("departureFilter")
const placeFilter = document.getElementById("placeFilter")
const companyFilter = document.getElementById("companyFilter")

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
            //console.log(data);
            if (data.type == "0" && data.tickets.length !== 0) {
                eventSort.classList.remove("d-none")
                busSort.classList.add('d-none')

                // filtering functions
               
                function filterByPlace(e) {
                  isLoading(ticketsContainer)
                  const place = e.target.value.toLowerCase()
                  const placeFiltered = data.tickets.filter((ticket) => {
                    return (
                      JSON.parse(ticket.details)
                        .Place.toLowerCase()
                        .includes(place) === true
                    )
                  })
                  showEvents(placeFiltered)
                }
                // Event Listeners
                placeFilter.addEventListener('keypress', filterByPlace)
                showEvents(data.tickets)
            } else if (data.type == "1" && data.tickets.length !== 0) {
              busSort.classList.remove('d-none')
              eventSort.classList.add('d-none')

              // filtering functions

              function filterByDestination(e) {
                isLoading(ticketsContainer)
                  const destination = e.target.value.toLowerCase()
                  const departure = departureFilter.value
                const destinationFiltered = data.tickets.filter((ticket) => {
                  return (
                    JSON.parse(ticket.details)
                      .Destination.place.toLowerCase()
                      .includes(destination) === true &&
                    JSON.parse(ticket.details)
                      .Departure.place.toLowerCase()
                      .includes(departure)
                  )
                })
                showBus(destinationFiltered)
              }
                
              function filterByDeparture(e) {
                isLoading(ticketsContainer)
                  const departure = e.target.value.toLowerCase()
                  const destination = destinationFilter.value
                const departureFiltered = data.tickets.filter((ticket) => {
                  return (
                    JSON.parse(ticket.details)
                      .Departure.place.toLowerCase()
                      .includes(departure) === true &&
                    JSON.parse(ticket.details)
                      .Destination.place.toLowerCase()
                      .includes(destination) === true
                  )
                })
                showBus(departureFiltered)
              }

              //Event Listeners
              destinationFilter.addEventListener(
                'keypress',
                filterByDestination
              )
              departureFilter.addEventListener(
                'keypress',
                filterByDeparture
              )
              showBus(data.tickets)
            } else {
                ticketsContainer.innerHTML = `Pas de Ticket!`
            }


        }).catch(error => console.log(error.message))

    }
    
   
}

/****
 *  Posting Data functions
 */
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

async function postData2(url = '', data = {}) {
  try {
    const response = await fetch(url, {
      method: 'POST',
      body: data,
    })
    return response.text() // parses JSON response into native JavaScript objects
  } catch (error) {
    console.error(`Fetch error: ${error.message}`)
  }
}

/****
 *  Posting Data functions
 */
// Utility functions

function showEvents(tickets) {
     let markup = tickets.map((event) => {
       const details = JSON.parse(event.details)
       // Getting one event's company
       const company = JSON.parse(event.company)

       // end of getting company
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

                                                 <a href="#" class="d-flex my-2 align-items-center text-decoration-none">
                                                    <img class="rounded-circle" src="${company.photo}" width="44" alt="Avatar">
                                                    <div class="ps-2">
                                                        <h6 class="fs-sm text-light lh-base mb-1">${company.full_name}</h6>
                                                        <div class="d-flex text-body fs-xs">
                                                            <span class="me-2 pe-1">
                                                                <i class="fi-ticket opacity-70 me-1"></i>
                                                                240
                                                            </span>

                                                        </div>
                                                    </div>
                                                </a>

                                              
                                            </div>
                                        </div>
                                    </div>
                `
     })
    const paginate = new Paginate(markup, 2, ticketsContainer)
    
}

function showBus(tickets) {
     let markup = tickets.map((ticket) => {
       const details = JSON.parse(ticket.details)
       // Getting one event's company
       const company = JSON.parse(ticket.company)

       // end of getting company
       const images = ticket.img.split(';')
       /* const company = JSON.parse(
                           sessionStorage.getItem('userPhotos')
                         ).filter((user) => user.id === event.company)[0]*/

       return `
                   <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between pb-1">
                                                <span class="fs-sm text-light me-3">${ticket.date}</span>
                                            </div>
                                            <h3 class="h6 mb-1">
                                                <a href="#" class="nav-link-light">
                                                    <div class="text-light opacity-70">
                                                        <i class="fi-map-pin me-1"></i>
                                                       ${details.Departure.place}

                                                        <i class="fi-arrow-right mx-3"></i>

                                                        <i class="fi-map-pin me-1"></i>
                                                         ${details.Destination.place}
                                                    </div>
                                                </a>
                                            </h3>
                                            <div class="text-primary fw-bold mb-1">$24,000</div>

                                            <div class="fs-sm text-light opacity-70">
                                                <span class="me-1">From  ${details.Departure.hour}
</span>

                                                <span class="me-1">To  ${details.Destination.hour}</span>

                                            </div>

                                            <a href="#" class="d-flex my-2 align-items-center text-decoration-none">
                                                <img class="rounded-circle" src=" ${company.photo}" width="44" alt="Avatar">
                                                <div class="ps-2">
                                                    <h6 class="fs-sm text-light lh-base mb-1">${company.full_name}</h6>
                                                    <div class="d-flex text-body fs-xs">
                                                        <span class="me-2 pe-1">
                                                            <i class="fi-ticket opacity-70 me-1"></i>
                                                            240
                                                        </span>

                                                    </div>
                                                </div>
                                            </a>


                                        </div>
                
                `
     })
     const paginate = new Paginate(markup, 2, ticketsContainer)
    
}

// Event Listeners
homeSearchForm.addEventListener('submit', getHomeSearch)


