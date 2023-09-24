export default class Paginate {
  data
  itemsPerPage
  container
  constructor(data, itemsPerPage, container) {
    this._data = data
    this.itemsPerPage = itemsPerPage
    this.container = container
    this.currentPosition = 1

    this.display(0, this.itemsPerPage)
  }
  display(start, end) {
    this.container.innerHTML = ``
    this._sliceData(start, end).forEach((element) => {
      const item = document.createElement('div')
      item.classList.add('item')
      item.innerHTML = element
      this.container.appendChild(item)
    })
    this.showPaginationNav()
  }
  setItemsPerPage(newItemPerPage) {
    this.itemsPerPage = newItemPerPage
    this.display(0, this.itemsPerPage)
  }
  showPaginationNav() {
    const nav = document.createElement('nav')
    nav.ariaLabel = 'Page navigation'

    const ul = document.createElement('ul')
    ul.classList.add('pagination')

    // Prev button
    const prev = document.createElement('li')
    prev.classList.add('page-item')
    prev.innerHTML = `<span class="page-link" id="prev" data-position="${
      this.currentPosition - 1 < 1 ? 1 : this.currentPosition - 1
    }">Previous</span>`
    ul.appendChild(prev)

    for (let i = 1; i <= this._setPages(); i++) {
      const li = document.createElement('li')
      li.classList.add('page-item')
      li.innerHTML = `<span class="page-link" data-position="${i}" >${i}</span>`
      ul.appendChild(li)
    }
    // Next Button
    const next = document.createElement('li')
    next.classList.add('page-item')
    next.innerHTML = `<span class="page-link" id="next" data-position="${
      this.currentPosition + 1 < this._setPages()
        ? this.currentPosition + 1
        : this._setPages()
    }">Next</span>`
    ul.appendChild(next)
    nav.appendChild(ul)
    this.container.appendChild(nav)
    ul.addEventListener('click', this._getPosition.bind(this))
  }

  _getPosition(e) {
    const position = parseInt(e.target.dataset.position)
    const start = position * this.itemsPerPage - this.itemsPerPage
    const end = position * this.itemsPerPage
    this.currentPosition = position

    this.display(start, end)
  }

  _setPages() {
    if (this._data.length < this.itemsPerPage) return 1
    return this._data.length % this.itemsPerPage === 0
      ? this._data.length / this.itemsPerPage
      : this._data.length / this.itemsPerPage + 1
  }
  _sliceData(start, end) {
    return this._data.slice(start, end)
  }
}
