<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Menu SDB</title>
    </head>
    <body>
      <h1>Selamat Datang {{auth()->user()->username}}</h1>
      <br><br><br><br><br><br><br>
      <section class="main">
          @if(Auth::user()->role != 4)
          <a href="/model">
          <div class="wrap wrap--1">
            <div class="container container--1">
              <p>Management</p>
            </div>
          </div>
          </a>
          @endif
          <a href="/kalkulator">  
          <div class="wrap wrap--2">
            <div class="container container--2">
                <p>Online Kalkulator Lama</p>
            </div>
          </div>
          </a>
          
          <a href="/kalkulator2">  
          <div class="wrap wrap">
            <div class="container container">
                <p>Online Kalkulator Baru (Perwilayah)</p>
            </div>
          </div>
          </a>
          <!-- @if(Auth::user()->role == 1) -->
          <!-- <a href="/kalkulator2">  
          <div class="wrap wrap">
            <div class="container container">
                <p>Online Kalkulator Surabaya</p>
            </div>
          </div>
          </a> -->
          <!-- @endif   -->
          <!-- <a href="/profile">
              <div class="wrap wrap--3">
                <div class="container container--3">
                  <p>Profile</p>
                </div>
              </div>  
          </a> -->
          <a href="/logout">
              <div class="wrap wrap--3">
                <div class="container container--3">
                  <p>Logout</p>
                </div>
              </div>  
          </a>
          
        </section>
<style type="text/css">
    *,
    *::after,
    *::before {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      font-size: 62.5%;
    }

    .btn {
      display: inline-block;
      font-weight: 400;
      color: #212529;
      text-align: center;
      vertical-align: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      background-color: transparent;
      border: 1px solid transparent;
      padding: 0.375rem 0.75rem;
      font-size: 1rem;
      line-height: 1.5;
      border-radius: 0.25rem;
      transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .btn-dark {
      color: #fff;
      background-color: #343a40;
      border-color: #343a40;
    }

    @media (min-width: 768px) {
      .float-md-left {
        float: left !important;
      }
      .float-md-right {
        float: right !important;
      }
      .float-md-none {
        float: none !important;
      }
    }

    body {
    
      background-image: url("dashboard/assets/images/login_bg.png");
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      min-height: 100vh;
      font-family: 'Roboto', sans-serif;
      
      /*font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

      min-height: 100vh;
      padding: 2rem;

      color: hsla(0, 0%, 0%, .6);
      background: var(--background-color);*/
      text-align: center;
    }

    h1 {
      /*width: 100%;
      float: left;
      line-height: 46px;
      font-size: 34px;
      font-weight: 700;
      letter-spacing: 2px;*/
      color: #FFFFFF;
      //position: relative;
      font-size: 3.2rem;
      padding-top: 2rem;
    }

    h1+p {
      //width: 100%;
      //float: left;
      //line-height: 46px;
      //font-size: 24px;
      //font-weight: 700;
      //letter-spacing: 2px;
      color: #FFFFFF;
      //position: relative;
      font-size: 1.8rem;
      padding: 2rem 0 3rem;
    }

    .main {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
    }

    .wrap {
      margin: 2rem;

      transform-style: preserve-3d;
      transform: perspective(100rem);

      cursor: pointer;
    }

    .container {
      --rX: 0;
      --rY: 0;
      --bX: 50%;
      --bY: 80%;

      width: 30rem;
      height: 36rem;
      border: 1px solid var(--background-color);
      border-radius: 1.6rem;
      padding: 4rem;

      display: flex;
      align-items: flex-end;

      position: relative;
      transform: rotateX(calc(var(--rX) * 1deg)) rotateY(calc(var(--rY) * 1deg));

      background: linear-gradient(hsla(0, 0%, 100%, .1), hsla(0, 0%, 100%, .1)), url("dashboard/assets/images/car1.jpg");
      background-position: var(--bX) var(--bY);
      background-size: 40rem auto;
      box-shadow: 0 0 3rem .5rem hsla(0, 0%, 0%, .2);

      transition: transform .6s 1s;
    }

    .container::before,
    .container::after {
      content: "";

      width: 2rem;
      height: 2rem;
      border: 1px solid #fff;

      position: absolute;
      z-index: 2;

      opacity: .3;
      transition: .3s;
    }

    .container::before {
      top: 2rem;
      right: 2rem;

      border-bottom-width: 0;
      border-left-width: 0;
    }

    .container::after {
      bottom: 2rem;
      left: 2rem;

      border-top-width: 0;
      border-right-width: 0;
    }

    .container--active {
      transition: none;
    }

    .container--2 {
      filter: hue-rotate(80deg) saturate(140%);
    }

    .container--3 {
      filter: hue-rotate(160deg) saturate(140%);
    }

    .container p {
      color: hsla(0, 0%, 100%, .6);
      font-size: 2.2rem;
    }

    .wrap:hover .container::before,
    .wrap:hover .container::after {
      width: calc(100% - 4rem);
      height: calc(100% - 4rem);
    }
</style>
        
<script>
  class parallaxTiltEffect {

    constructor({element, tiltEffect}) {

      this.element = element;
      this.container = this.element.querySelector(".container");
      this.size = [300, 360];
      [this.w, this.h] = this.size;

      this.tiltEffect = tiltEffect;

      this.mouseOnComponent = false;

      this.handleMouseMove = this.handleMouseMove.bind(this);
      this.handleMouseEnter = this.handleMouseEnter.bind(this);
      this.handleMouseLeave = this.handleMouseLeave.bind(this);
      this.defaultStates = this.defaultStates.bind(this);
      this.setProperty = this.setProperty.bind(this);
      this.init = this.init.bind(this);

      this.init();
    }

    handleMouseMove(event) {
      const {offsetX, offsetY} = event;

      let X;
      let Y;

      if (this.tiltEffect === "reverse") {
        X = ((offsetX - (this.w/2)) / 3) / 3;
        Y = (-(offsetY - (this.h/2)) / 3) / 3;
      }

      else if (this.tiltEffect === "normal") {
        X = (-(offsetX - (this.w/2)) / 3) / 3;
        Y = ((offsetY - (this.h/2)) / 3) / 3;
      }

      this.setProperty('--rY', X.toFixed(2));
      this.setProperty('--rX', Y.toFixed(2));

      this.setProperty('--bY', (80 - (X/4).toFixed(2)) + '%');
      this.setProperty('--bX', (50 - (Y/4).toFixed(2)) + '%');
    }

    handleMouseEnter() {
      this.mouseOnComponent = true;
      this.container.classList.add("container--active");
    }

    handleMouseLeave() {
      this.mouseOnComponent = false;
      this.defaultStates();
    }

    defaultStates() {
      this.container.classList.remove("container--active");
      this.setProperty('--rY', 0);
      this.setProperty('--rX', 0);
      this.setProperty('--bY', '80%');
      this.setProperty('--bX', '50%');
    }

    setProperty(p, v) {
      return this.container.style.setProperty(p, v);
    }

    init() {
      this.element.addEventListener('mousemove', this.handleMouseMove);
      this.element.addEventListener('mouseenter', this.handleMouseEnter);
      this.element.addEventListener('mouseleave', this.handleMouseLeave);
    }

  }

  const $ = e => document.querySelector(e);

  const wrap1 = new parallaxTiltEffect({
    element: $('.wrap--1'),
    tiltEffect: 'reverse'
  });

  const wrap2 = new parallaxTiltEffect({
    element: $('.wrap--2'),
    tiltEffect: 'normal'
  });

  const wrap3 = new parallaxTiltEffect({
    element: $('.wrap--3'),
    tiltEffect: 'reverse'
  });

  const wrap4 = new parallaxTiltEffect({
    element: $('.wrap--4'),
    tiltEffect: 'reverse'
  });
</script>
</body>
</html>
