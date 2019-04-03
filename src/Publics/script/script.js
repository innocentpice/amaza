$(document).ready(function () {
    $("#member_menu").on("click", function (e) {
        $('.navbar-item.has-dropdown').toggleClass('is-active');
    });
    $(".navbar-burger.burger").on("click", function () {
        $('#NavDropdown').toggleClass('is-hidden-touch');
        $(this).toggleClass('is-active');
    });
});

var bulmaCarousel = function () {
    'use strict';
    class a {
        constructor(a) {
            if (this._clickEvent = 'ontouchstart' in window ? 'touchstart' : 'click', this.element = 'string' == typeof a ? document.querySelector(a) : a, !this.element) throw new Error('An invalid selector or non-DOM node has been provided.');
            this.init()
        }
        init() {
            if (this.items = Array.from(this.element.querySelectorAll('.carousel-item')), this.items.forEach((a) => {
                    let b = a.querySelector('img');
                    b.setAttribute('draggable', !1)
                }), this.computedStyle = window.getComputedStyle(this.element), this.previousControl = this.element.querySelector('.carousel-nav-left'), this.nextControl = this.element.querySelector('.carousel-nav-right'), 1 >= this.items.length) {
                const a = this.element.querySelector('.carousel-container');
                a && (a.style.left = '0'), this.previousControl && (this.previousControl.style.display = 'none'), this.nextControl && (this.nextControl.style.display = 'none')
            }
            this._bindEvents(), this._initOrder(), this.element.dataset.autoplay && 'true' == this.element.dataset.autoplay && this._autoPlay(this.element.dataset.delay || 5e3)
        }
        _bindEvents() { this.previousControl && this.previousControl.addEventListener(this._clickEvent, (a) => { a.preventDefault(), this._slide('previous'), this._autoPlayInterval && (clearInterval(this._autoPlayInterval), this._autoPlay(this.element.dataset.delay || 5e3)) }, !1), this.nextControl && this.nextControl.addEventListener(this._clickEvent, (a) => { a.preventDefault(), this._slide('next'), this._autoPlayInterval && (clearInterval(this._autoPlayInterval), this._autoPlay(this.element.dataset.delay || 5e3)) }, !1), this.element.addEventListener('touchstart', (a) => { this._swipeStart(a) }), this.element.addEventListener('mousedown', (a) => { this._swipeStart(a) }), this.element.addEventListener('touchend', (a) => { this._swipeEnd(a) }), this.element.addEventListener('mouseup', (a) => { this._swipeEnd(a) }) } _initOrder() {
            let a = this.element.querySelector('.carousel-item.is-active');
            a || (this.items[0].classList.add('is-active'), a = this.items[0]);
            const b = this.items.indexOf(a);
            b ? this.items.push(this.items.splice(0, b)) : this.items.unshift(this.items.pop()), this._setOrder()
        }
        _setOrder() { this.items.forEach((a, b) => { a.style['z-index'] = 1 === b ? '1' : '0', a.style.order = b }) } _swipeStart(a) { this._touch = { start: { x: a.clientX, y: a.clientY }, end: { x: a.clientX, y: a.clientY } } } _swipeEnd(a) { this._touch.end = { x: a.clientX, y: a.clientY }, this._handleGesture() } _handleGesture() {
            const a = { horizontal: (this._touch.end.x - this._touch.start.x) / parseInt(this.computedStyle.getPropertyValue('width')), vertical: (this._touch.end.y - this._touch.start.y) / parseInt(this.computedStyle.getPropertyValue('height')) };
            a.horizontal > a.vertical && .25 < a.horizontal && this._slide('previous'), a.horizontal < a.vertical && -.25 > a.horizontal && this._slide('next')
        }
        _slide(a = 'next') {
            if (this.items.length) {
                const b = this.element.querySelector('.carousel-item.is-active');
                let c;
                b.classList.remove('is-active'), 'previous' === a ? (this.items.unshift(this.items.pop()), this.element.classList.add('is-reversing')) : (this.items.push(this.items.shift()), this.element.classList.remove('is-reversing')), c = 1 <= this.items.length ? this.items[1] : this.items[0], c.classList.add('is-active'), this._setOrder(), this.element.classList.toggle('carousel-animated'), setTimeout(() => { this.element.classList.toggle('carousel-animated') }, 50)
            }
        }
        _autoPlay(a = 5e3) { this._autoPlayInterval = setInterval(() => { this._slide('next') }, a) }
    }
    return document.addEventListener('DOMContentLoaded', function () {
        var b = document.querySelectorAll('.carousel, .hero-carousel');
            [].forEach.call(b, function (b) { new a(b) })
    }), a
}();
