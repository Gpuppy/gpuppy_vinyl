import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    connect() {
        /*this.element.innerHTML = 'Vous avez clické 0 fois ;(';*/
        this.count = 0;

        const counterNumberElement = this.element
            .getElementsByClassName('counter-count')[0];

        this.element.addEventListener('click',() => {
            this.count++;
            counterNumberElement.innerHTML = this.count;
        })
    }
}