function isJson(item) {
  item = typeof item !== 'string' ? JSON.stringify(item) : item

  try {
    item = JSON.parse(item)
  } catch (e) {
    return false
  }

  if (typeof item === 'object' && item !== null) {
    return true
  }

  return false
}

 //FeedBack shower
function showMessage(type, message) {
    Swal.fire({
        icon: type,
        title: 'Reponse du server',
        text: message,
    })

}
function isLoading(el) {
  el.innerHTML = `<div class="spinner-border" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                    </div>`
}
export {isJson, showMessage, isLoading}
