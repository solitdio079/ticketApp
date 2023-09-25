// Getting my UI functions
import { isJson, showMessage, isLoading } from './UI.js'
const queryString = window.location.search
const urlParams = new URLSearchParams(queryString)
const id = urlParams.get('id')

if (id) {
    
} else {
    history.back()
}