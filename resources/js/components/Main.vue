<template>
  <div>
    <header>
      <button
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
      </div>
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
              <div class="time__number h3">18</div>
              <div class="time__title">Дней</div>
            </div>
            <div class="time__item">
              <div class="time__number h3">18</div>
              <div class="time__title">Часов</div>
            </div>
            <div class="time__item">
              <div class="time__number h3">18</div>
              <div class="time__title">Минут</div>
            </div>
            <div class="time__item">
              <div class="time__number h3">18</div>
              <div class="time__title">Секунд</div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer></footer>
  </div>
</template>

<script>
export default {
  data() {
    return {
      imgMainSlider: require("/img/main-screen__bgc.jpg"),
    };
  },
  mounted() {
    console.log(this.imgMainSlider);
  },
};
</script>

<style>
</style>
