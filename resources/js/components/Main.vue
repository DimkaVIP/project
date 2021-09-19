<template>
  <div>
    <header>
      <!-- <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbar-content"
        aria-controls="navbar-content"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse show" id="navbar-content">
        <div class="navbar-nav mt-3 offset-xl-1">
          <ul
            class="
              nav
              menu
              align-items-xl-end align-items-center
              flex-fill
              justify-content-between
              mod-list
            "
          >
            <li class="current active">
              <a href="#">Главная</a>
            </li>
            <li class="">
              <a href="#">Курсы</a>
            </li>
            <li class="">
              <a href="#">Расписание</a>
            </li>
            <li class="">
              <a href="#">Преподаватели</a>
            </li>
            <li class="">
              <a href="#">Рассылка</a>
            </li>
            <li class="">
              <a href="#">Контакты</a>
            </li>
          </ul>
        </div>
      </div> -->
    </header>
    <main>
      <div class="main-slider">
        <div class="img position-absolute pos-fill">
          <img :src="imgMainSlider.default" alt="" />
        </div>
        <div class="container h-100">
          <div class="heading">
            <div class="row">
              <div class="col-md-9">
                <div class="h1 title">
                  Первый курс<br />
                  по компьютерной сборке
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex time">
            <div class="time__item">
              <div class="time__number h3">{{ days }}</div>
              <div class="time__title">Дней</div>
            </div>
            <div class="time__item">
              <div class="time__number h3">{{ hours }}</div>
              <div class="time__title">Часов</div>
            </div>
            <div class="time__item">
              <div class="time__number h3">{{ minutes }}</div>
              <div class="time__title">Минут</div>
            </div>
            <div class="time__item">
              <div class="time__number h3">{{ seconds }}</div>
              <div class="time__title">Секунд</div>
            </div>
          </div>
        </div>
      </div>
      <div class="action">
        <div class="row align-items-center">
          <div class="col-md-3">
            <button class="btn" @click="openModal">Сортировка JS</button>
          </div>
          <div class="col-md-3">
            <div class="students">
              <div class="studens__item">
                <div class="studens__title">Учеников всего:</div>
                <div class="studens__number">200</div>
              </div>
              <div class="studens__item">
                <div class="studens__title">Успешно закончили курс:</div>
                <div class="studens__number">190</div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="students">
              <div class="studens__item pl-0 mb-2">
                <div class="studens__title">Заработано учениками:</div>
                <div class="studens__number">600 000₽</div>
              </div>
            </div>
            <div class="my-progress">
              <div class="my-progress__line">
                <div class="my-progress__success"></div>
                <div class="my-progress__plan"></div>
              </div>
              <div class="my-progress__numbers">
                <div class="my-progress__number">600 000₽</div>
                <div class="my-progress__number">1 000 000₽</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer></footer>
    <div id="m-feed-back-info" class="modal fade" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <p class="modal-title">Модальное окно</p>
            <button class="close" type="button" data-dismiss="modal">×</button>
          </div>
          <div class="modal-body">
            <my-modal :numbers="numbers"></my-modal>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import MyModal from "./Modal.vue";

export default {
  components: {
    MyModal,
  },
  data() {
    return {
      imgMainSlider: require("/img/main-screen__bgc.jpg"),
      numbers: [1, 3, 2, 10, 15, 12, 30, 22],
      days: 0,
      hours: 0,
      minutes: 0,
      seconds: 0,
    };
  },
  mounted() {
    this.days = JSON.parse(localStorage.getItem("days"))
      ? +JSON.parse(localStorage.getItem("days"))
      : 18;
    this.hours = JSON.parse(localStorage.getItem("hours"))
      ? +JSON.parse(localStorage.getItem("hours"))
      : 18;
    this.minutes = JSON.parse(localStorage.getItem("minutes"))
      ? +JSON.parse(localStorage.getItem("minutes"))
      : 18;
    this.seconds = JSON.parse(localStorage.getItem("seconds"))
      ? +JSON.parse(localStorage.getItem("seconds"))
      : 18;

    setInterval(() => {
      this.seconds--;
      JSON.stringify(localStorage.setItem("seconds", this.seconds));
      if (this.seconds == 0) {
        this.seconds = 60;
        JSON.stringify(localStorage.setItem("seconds", this.seconds));
        this.minutes--;
        JSON.stringify(localStorage.setItem("minutes", this.minutes));
      }
      if (this.minutes == 0) {
        this.minutes = 60;
        JSON.stringify(localStorage.setItem("minutes", this.minutes));
        this.hours--;
        JSON.stringify(localStorage.setItem("hours", this.hours));
      }
      if (this.hours == 0) {
        this.hours = 24;
        JSON.stringify(localStorage.setItem("hours", this.hours));
        this.days--;
        JSON.stringify(localStorage.setItem("days", this.days));
      }
    }, 1000);
  },
  methods: {
    openModal() {
      jQuery(document).ready(function ($) {
        $("#m-feed-back-info").modal();
      });
    },
  },
};
</script>

<style>
</style>
