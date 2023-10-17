// Getting my UI functions
import { isJson, showMessage, isLoading } from './UI.js'
import { postData, postData2 } from './postData.js'

// Get ticket by urlparam id
const queryString = window.location.search
const urlParams = new URLSearchParams(queryString)
const id = urlParams.get('id')

// Get DOM elements
const nameItem = document.getElementById('nameItem')
const detailsItem = document.getElementById('detailsItem')
const priceItem = document.getElementById('priceItem')
const companyItem = document.getElementById('companyItem')
const dateItem = document.getElementById('dateItem')
const imgContainer = document.getElementById('imgContainer')
const passSelect = document.getElementById('passSelect')
const pass1Infos = document.getElementById('pass1Infos')
const pass2Infos = document.getElementById('pass2Infos')
const pass2FullName = document.getElementById('pass2FullName')
const pass2ID = document.getElementById('pass2ID')
const pass1FullName = document.getElementById('pass1FullName')
const pass1ID = document.getElementById('pass1ID')
const buyerEmail = document.getElementById('buyerEmail')
const buyerFullName = document.getElementById('buyerFullName')

const orangeMoneyBtn = document.getElementById('orangeMoneyBtn')
//const stripeBtn = document.getElementById("stripeBtn")


if (id) {
 
  const formData = new FormData()
  formData.append('getOneTicketSubmit', 'action')
  formData.append('id', id)
  // Debugging purposes
  
  postData('./php/tickets/getOneTicket.inc.php', formData)
    .then((data) => {
      data = data[0]
      const company = JSON.parse(data.company)
      const images = data.img.split(';')
      imgContainer.innerHTML = ` <div class="tns-carousel-inner" data-carousel-options='{"loop": false, "gutter": 16}'>
        `

      images.slice(0, images.length - 1).forEach((element) => {
        const img = document.createElement('img')
        img.src = element
        imgContainer.appendChild(img)
      })
      imgContainer.innerHTML += `</div>`
      nameItem.innerHTML = `Nom: <b>${data.name} </b>`
      priceItem.innerHTML = `Prix: <b>${data.price} Fcfa </b>`
      dateItem.innerHTML = `Date: <b>${data.date}</b>`
      companyItem.innerHTML = `
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

        `
      if (data.type == '0') {
        const details = JSON.parse(data.details)
        detailsItem.innerHTML = `
                            <!-- Dark table -->
                <div class="table-responsive">
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th>Lieu</th>
                        <th>Heure</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>${details.Place}</td>
                        <td>${details.Hour}</td>
                    </tr>
                    </tbody>
                </table>
                </div>
                            `
      } else if (data.type == '1') {
        const details = JSON.parse(data.details)
        detailsItem.innerHTML = `
                            <!-- Dark table -->
                <div class="table-responsive">
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th>Depart</th>
                        <th>Destination</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>${details.Departure.place}</td>
                        <td>${details.Destination.place}</td>
                    </tr>
                    <tr>
                        <td>${details.Departure.hour}</td>
                        <td>${details.Destination.hour}</td>
                    </tr>
                    </tbody>
                </table>
                </div>
                            `
      }

      function selectTicketNumber(e) {
        const ticketNumber = e.target.value
        if (ticketNumber == '1') {
          pass1Infos.classList.remove('d-none')
          pass2Infos.classList.add('d-none')
        } else if (ticketNumber == '2') {
          pass1Infos.classList.remove('d-none')
          pass2Infos.classList.remove('d-none')
        } else {
          pass1Infos.classList.add('d-none')
          pass2Infos.classList.add('d-none')
        }
      }

      function getOrangeMoneyURL() {
        console.log('clicked')
        isLoading(orangeMoneyBtn)
        // if (pass1Infos.classList.contains('d-none')) {
        //     showMessage("info", "Veuillerz remplir les champs des beneficiaires!")
        //     orangeMoneyBtn.innerHTML = ` <img src="assets/img/orange/orange_money.png" width="80">`
        //     return
        // }
        // Checking if passenger2 is invisible and verifying fields of passenger 1
        if (
          (!pass1FullName.value ||
            pass1FullName.value === '' ||
            !pass1ID.value ||
            pass1ID.value === '') &&
          pass2Infos.classList.contains('d-none')
        ) {
          showBenficiaryError()
          return
        }
        // Checking if passenger2 is visible and verifying fields
        else if (
          (!pass1FullName.value ||
            pass1FullName.value === '' ||
            !pass1ID.value ||
            pass1ID.value === '' ||
            !pass2FullName.value ||
            pass2FullName.value === '' ||
            !pass2ID.value ||
            pass2ID.value === '') &&
          !pass2Infos.classList.contains('d-none')
        ) {
          showBenficiaryError()
        }
        // Checking if buyer email and buyer full name exists
        else if (
          !buyerEmail.value ||
          buyerEmail.value === '' ||
          !buyerFullName.value ||
          buyerFullName.value === ''
        ) {
          showBenficiaryError()
        }
          
          // Preparing the formData to get payment URL

          const passengers = {}
          let passengerNumber = 0
          if (pass2Infos.classList.contains("d-none")) {
            
                  passengers.pass1FullName = pass1FullName.value
              passengers.pass1ID = pass1ID.value

              passengerNumber++
            
          } else {
                
                  passengers.pass1FullName = pass1FullName.value
                  passengers.pass1Id =  pass1ID.value
                  passengers.pass2FullName = pass2FullName.value
                  passengers.pass2ID = pass2ID.value
              
              passengerNumber += 2

               
              
          }
          const formData = new FormData()
          formData.append("ticket", JSON.stringify(data))
          formData.append("getUrlSubmit", JSON.stringify(data))
          formData.append("passengers", JSON.stringify(passengers))
          formData.append("owner", buyerEmail.value)
          formData.append("amount", passengerNumber * data.price)
        // Debugging purposes
       postData2('php/getPaymentUrl.inc.php', formData).then((data) =>
         console.log(data)
       )
        postData("php/getPaymentUrl.inc.php", formData).then((data) => window.open(data[0], '_blank'))
          
      }
        
        
      function showBenficiaryError() {
        showMessage('info', 'Veuillez remplir les champs des beneficiaires!')
        orangeMoneyBtn.innerHTML = ` <img src="assets/img/orange/orange_money.png" width="80">`
        return
      }
        
        
      orangeMoneyBtn.addEventListener('click', getOrangeMoneyURL)
      passSelect.addEventListener('change', selectTicketNumber)
    })
    .catch((error) => console.log(error.message))
} else {
  history.back()
}
