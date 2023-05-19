<style type="text/css">
	/*Di động*/
	.ff-primary {
		font-family: 'Montserrat', sans-serif;
	}
	.fw-primary {
		font-weight: 500;
	}

	.hero__second {
		background-image: url('img/breadcrumb.webp');
		background-repeat: no-repeat;
		background-size: cover;
		width:calc(100vw + 15px);
		z-index: 4;
	}
	.hero__second::after {
		content: '';
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		background-color: #000;
		opacity: 0.6;
		z-index: -1;
	}
	.nav__mobile {
		right: 25%; 
		z-index: 99999;
	}
	/*Tablet*/
	@media (min-width: 768px){
		.nav__mobile {
			right: 60%; 
			z-index: 99999;
		}				
	}
	/*PC*/
	@media (min-width: 1400px){
		
	}
</style>
<!-- --------------------- START BLUR WHEN TOGGLE NAV MOBILE ------------------------- -->
<div style="background-color: rgba(0, 0, 0, 0.9); z-index: 99999;" class="position-fixed top-0 start-0 end-0 bottom-0 d-none hidden__nav">
</div>
<!-- ------------------- END BLUR WHEN TOGGLE NAV MOBILE ------------------------------ -->
<!-- ---------------------------- START NAV MOBILE ------------------------------------ -->
<div class="position-fixed top-0 start-0 bottom-0 d-none bg-primary nav__mobile">
			<ul class="list-unstyled m-0 d-flex flex-column ps-3">
				<li style="border-bottom: 2px dotted white;" class="pt-4 pb-3 px-3">
					<a class="text-decoration-none text-light fw-primary" href="#">
						Trang chủ
					</a>
				</li>
				<li style="border-bottom: 2px dotted white;" class="p-3">
					<a class="text-decoration-none text-light fw-primary" href="?p=about">
						Về chúng tôi
					</a>
				</li>
				<li  style="border-bottom: 2px dotted white;" class="p-3">
					<a  class="text-decoration-none text-light fw-primary d-flex justify-content-between" href="?p=album">
						<span>Tác phẩm</span> <i class="bi bi-caret-down-fill"></i>
					</a>
				</li>
				<li  style="border-bottom: 2px dotted white;" class="p-3">
					<a  class="text-decoration-none text-light fw-primary" href="?p=regis">
						Đặt lịch hẹn
					</a>
				</li>
				<li  style="border-bottom: 2px dotted white;" class="p-3">
					<a  class="text-decoration-none text-light fw-primary" href="?p=news">
						Tin tức
					</a>
				</li>
				<li  style="border-bottom: 2px dotted white;" class="p-3">
					<a  class="text-decoration-none text-light fw-primary" href="?p=contact">
						Liên hệ
					</a>
				</li>
			</ul>
</div>
<!-- ---------------------------- END NAV MOBILE ------------------------------------ -->
<!-- ---------------------------- START HEADER ------------------------------------ -->
<div class="header row">
	<div>
		<div class="band d-flex justify-content-center align-itmes-center ff-primary bg-primary fw-primary text-light" style="padding: 0.9rem 0; font-size: 0.9rem;">
			<span class="me-md-5 me-0"><i class="px-1 bi bi-clock-fill"></i>Thời gian làm việc: Từ <b>9h00</b> đến <b>22h00</b></span>
			<span class="d-none d-md-inline"><i class="px-1 bi bi-telephone-fill"></i>Hotline: <b>0123 456 789</b></span>
		</div>
		<div class="nav bg-dark px-lg-5 px-md-4 px-3 py-2 d-flex align-items-center justify-content-between">
			<ul class="list-unstyled m-0 d-lg-flex align-items-center justify-content-between col-10 d-none">
				<li class="py-4 px-3">
					<a class="text-decoration-none text-uppercase text-primary fw-primary" href="#">
						TRANG CHỦ
					</a>
				</li>
				<li class="py-4 px-3">
					<a class="text-decoration-none text-uppercase text-light fw-primary" href="?p=about">
						Về chúng tôi
					</a>
				</li>
				<li class="py-4 px-3">
					<a class="text-decoration-none text-uppercase text-light fw-primary" href="?p=album">
						Tác phẩm <i class="bi bi-caret-down-fill"></i>
					</a>
				</li>
				<li class="py-4 px-3">
					<a class="text-decoration-none text-uppercase text-light fw-primary" href="?p=regis">
						Đặt lịch hẹn
					</a>
				</li>
				<li class="py-4 px-3">
					<a class="text-decoration-none text-uppercase text-light fw-primary" href="?p=news">
						Tin tức
					</a>
				</li>
				<li class="py-4 px-3">
					<a class="text-decoration-none text-uppercase text-light fw-primary" href="?p=contact">
						Liên hệ
					</a>
				</li>
			</ul>
			<div class="col-2 col-lg-0 text-start d-lg-none d-block display__nav">
				<i class="bi bi-justify fs-4 text-primary"></i>
			</div>
			<img style="width: 78px;" class="col-2 col-lg-0 d-lg-none d-block" src="img/logo_slider_1.webp" alt="">
			<div class="col-2 text-end">
				<i class="bi bi-search text-primary fs-5"></i>
			</div>
		</div>
	</div>
</div>
<!-- ---------------------------- END HEADER ------------------------------------ -->


<script>

const nav__mobile = document.querySelector('.nav__mobile')	
const display__nav = document.querySelector('.display__nav')	
const hidden__nav = document.querySelector('.hidden__nav')

display__nav.addEventListener('click', ()=> {
	nav__mobile.classList.add('d-block')
	nav__mobile.classList.remove('d-none')
	hidden__nav.classList.add('d-block')
	hidden__nav.classList.remove('d-none')
})
hidden__nav.addEventListener('click',()=> {
	nav__mobile.classList.add('d-none')
	nav__mobile.classList.remove('d-block')
	hidden__nav.classList.remove('d-block')
	hidden__nav.classList.add('d-none')
})
</script>