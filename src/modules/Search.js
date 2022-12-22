// class Search {
//   // 1. Describe and create/initiate our object
//   constructor() {
//     this.resultsDiv = document.querySelector('#search-overlay_results')
//     this.openButton = document.querySelector('.js-search-trigger')
//     this.closeButton = document.querySelector('.search-overlay_close')
//     this.searchOverlay = document.querySelector('.search-overlay')
//     this.searchField = document.querySelector('#search-term')
//     this.events()
//     this.isOverlayOpen = false
//   }

//   // 2. Events
//   events() {
//     console.log(this.openButton)
//     console.log(this.closeButton)
//     console.log(this.searchOverlay)
//     console.log(this.searchField)

//     this.openButton.addEventListener('click', () => this.openOverlay())
//     this.closeButton.addEventListener('click', () => this.closeOverlay())
//     document.addEventListener('keydown', () => this.keyPressDispatcher(e))
//     this.searchField.addEventListener('keydown', () => this.typingLogic())
//   }

//   // 3. Methods (function, action...)
//   typingLogic() {
//     clearTimeout(this.typingTimer)
//     this.typingTimer = setTimeout(function () {
//       console.log('timeout test')
//     }, 2000)
//   }
//   openOverlay() {
//     document.querySelector('.search-overlay').classList.remove('d-none')
//     //document.querySelector('.search-overlay').classList.add('d-block')
//     //$('.search-overlay').removeClass('d-none')
//     document.body.classList.add('body-no-scroll')
//     this.isOverlayOpen = true
//     alert('openOverlay')
//   }

//   closeOverlay() {
//     document.querySelector('.search-overlay').classList.add('d-none')
//     //this.searchOverlay.addClass('d-none')
//     document.body.classList.remove('body-no-scroll')
//     this.isOverlayOpen = false
//     alert('closeOverlay')
//   }

//   keyPressDispatcher(e) {
//     if (e.keyCode == 83 && !this.isOverlayOpen) {
//       this.openOverlay()
//     }
//     if (e.keyCode == 27 && this.isOverlayOpen) {
//       this.closeOverlay()
//     }
//   }
// }

// export default Search

import $ from 'jquery'

class Search {
  // 1. describe and create/initiate our object
  constructor() {
    this.resultsDiv = $('#search-results')
    this.openButton = $('.js-search-trigger')
    this.closeButton = $('.search-overlay_close')
    this.searchOverlay = $('.search-overlay')
    this.searchField = $('#search-term')
    this.events()
    this.isOverlayOpen = false
    this.isSpinnerVisible = false
    this.previousValue
    this.typingTimer
  }

  // 2. events
  events() {
    this.openButton.on('click', this.openOverlay.bind(this))
    this.closeButton.on('click', this.closeOverlay.bind(this))
    $(document).on('keydown', this.keyPressDispatcher.bind(this))
    this.searchField.on('keyup', this.typingLogic.bind(this))
  }

  // 3. methods (function, action...)
  typingLogic() {
    if (this.searchField.val() != this.previousValue) {
      clearTimeout(this.typingTimer)
      if (this.searchField.val()) {
        if (!this.isSpinnerVisible) {
          this.resultsDiv.html(
            '<div class="d-flex justify-content-center"><div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span></div></div>'
          )
          this.isSpinnerVisible = true
        }
        this.typingTimer = setTimeout(this.getResults.bind(this), 2000)
      } else {
        this.resultsDiv.html('')
        this.isSpinnerVisible = false
      }
    }
    this.previousValue = this.searchField.val() // get the value of the search field
  }

  getResults() {
    this.resultsDiv.html('Results go here')
    this.isSpinnerVisible = false
  }

  keyPressDispatcher(e) {
    if (
      e.keyCode == 83 &&
      !this.isOverlayOpen &&
      !$('input, textarea').is(':focus')
    ) {
      this.openOverlay()
    }

    if (e.keyCode == 27 && this.isOverlayOpen) {
      this.closeOverlay()
    }
  }

  openOverlay() {
    this.searchOverlay.removeClass('d-none')
    $('body').addClass('body-no-scroll')
    console.log('our open method just ran!')
    this.isOverlayOpen = true
  }

  closeOverlay() {
    this.searchOverlay.addClass('d-none')
    $('body').removeClass('body-no-scroll')
    console.log('our close method just ran!')
    this.isOverlayOpen = false
  }
}

export default Search
