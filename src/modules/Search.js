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
//     document.querySelector('.search-overlay').classList.add('d-block')
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

import axios from 'axios'

class Search {
  // 1. describe and create/initiate our object
  constructor() {
    this.resultsDiv = document.querySelector('#search-overlay__results')
    this.openButton = document.querySelectorAll('.js-search-trigger')
    this.closeButton = document.querySelector('.search-overlay__close')
    this.searchOverlay = document.querySelector('.search-overlay')
    this.searchField = document.querySelector('#search-term')
    this.isOverlayOpen = false
    this.isSpinnerVisible = false
    this.previousValue
    this.typingTimer
    this.events()
  }

  // 2. events
  events() {
    this.openButton.forEach(el => {
      el.addEventListener('click', e => {
        e.preventDefault()
        this.openOverlay()
      })
    })

    this.closeButton.addEventListener('click', () => this.closeOverlay())
    document.addEventListener('keydown', e => this.keyPressDispatcher(e))
    this.searchField.addEventListener('keyup', () => this.typingLogic())
  }

  // 3. methods (function, action...)
  typingLogic() {
    if (this.searchField.value != this.previousValue) {
      clearTimeout(this.typingTimer)

      if (this.searchField.value) {
        if (!this.isSpinnerVisible) {
          this.resultsDiv.innerHTML = '<div class="spinner-loader"></div>'
          this.isSpinnerVisible = true
        }
        this.typingTimer = setTimeout(this.getResults.bind(this), 750)
      } else {
        this.resultsDiv.innerHTML = ''
        this.isSpinnerVisible = false
      }
    }

    this.previousValue = this.searchField.value
  }

  async getResults() {
    try {
      const response = await axios.get(
        universityData.root_url +
          '/wp-json/university/v1/search?term=' +
          this.searchField.value
      )
      const results = response.data
      this.resultsDiv.innerHTML = `
        <div class="row">
          <div class="one-third">
            <h2 class="search-overlay__section-title">General Information</h2>
            ${
              results.generalInfo.length
                ? '<ul class="link-list min-list">'
                : '<p>No general information matches that search.</p>'
            }
              ${results.generalInfo
                .map(
                  item =>
                    `<li><a href="${item.permalink}">${item.title}</a> ${
                      item.postType == 'post' ? `by ${item.authorName}` : ''
                    }</li>`
                )
                .join('')}
            ${results.generalInfo.length ? '</ul>' : ''}
          </div>
          <div class="one-third">
            <h2 class="search-overlay__section-title">Programs</h2>
            ${
              results.programs.length
                ? '<ul class="link-list min-list">'
                : `<p>No programs match that search. <a href="${universityData.root_url}/programs">View all programs</a></p>`
            }
              ${results.programs
                .map(
                  item =>
                    `<li><a href="${item.permalink}">${item.title}</a></li>`
                )
                .join('')}
            ${results.programs.length ? '</ul>' : ''}

            <h2 class="search-overlay__section-title">Professors</h2>
            ${
              results.professors.length
                ? '<ul class="professor-cards">'
                : `<p>No professors match that search.</p>`
            }
              ${results.professors
                .map(
                  item => `
                <li class="professor-card__list-item">
                  <a class="professor-card" href="${item.permalink}">
                    <img class="professor-card__image" src="${item.image}">
                    <span class="professor-card__name">${item.title}</span>
                  </a>
                </li>
              `
                )
                .join('')}
            ${results.professors.length ? '</ul>' : ''}

          </div>
          <div class="one-third">
            <h2 class="search-overlay__section-title">Campuses</h2>
            ${
              results.campuses.length
                ? '<ul class="link-list min-list">'
                : `<p>No campuses match that search. <a href="${universityData.root_url}/campuses">View all campuses</a></p>`
            }
              ${results.campuses
                .map(
                  item =>
                    `<li><a href="${item.permalink}">${item.title}</a></li>`
                )
                .join('')}
            ${results.campuses.length ? '</ul>' : ''}

            <h2 class="search-overlay__section-title">Events</h2>
            ${
              results.events.length
                ? ''
                : `<p>No events match that search. <a href="${universityData.root_url}/events">View all events</a></p>`
            }
              ${results.events
                .map(
                  item => `
                <div class="event-summary">
                  <a class="event-summary__date t-center" href="${item.permalink}">
                    <span class="event-summary__month">${item.month}</span>
                    <span class="event-summary__day">${item.day}</span>  
                  </a>
                  <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="${item.permalink}">${item.title}</a></h5>
                    <p>${item.description} <a href="${item.permalink}" class="nu gray">Learn more</a></p>
                  </div>
                </div>
              `
                )
                .join('')}

          </div>
        </div>
      `
      this.isSpinnerVisible = false
    } catch (e) {
      console.log(e)
    }
  }

  keyPressDispatcher(e) {
    if (
      e.keyCode == 83 &&
      !this.isOverlayOpen &&
      document.activeElement.tagName != 'INPUT' &&
      document.activeElement.tagName != 'TEXTAREA'
    ) {
      this.openOverlay()
    }

    if (e.keyCode == 27 && this.isOverlayOpen) {
      this.closeOverlay()
    }
  }

  openOverlay() {
    this.searchOverlay.classList.add('search-overlay--active')
    document.body.classList.add('body-no-scroll')
    this.searchField.value = ''
    setTimeout(() => this.searchField.focus(), 301)
    console.log('our open method just ran!')
    this.isOverlayOpen = true
    return false
  }

  closeOverlay() {
    this.searchOverlay.classList.remove('search-overlay--active')
    document.body.classList.remove('body-no-scroll')
    console.log('our close method just ran!')
    this.isOverlayOpen = false
  }
}

export default Search
