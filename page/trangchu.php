<style type="text/css">
	/*Di động*/
	.ff-primary {
		font-family: 'Montserrat', sans-serif;
	}
	.fw-primary {
		font-weight: 500;
	}
	.fw-800 {
		font-weight: 700;
	}
	.album__img{
		object-fit: cover;
	}
	.hero {
		background-image: url('img/slider_1.webp');
		background-repeat: no-repeat;
		background-size: cover;
		width:calc(100vw + 15px);
	}
	.process__line::before{
		position: absolute;
		top: 38.6%;
		content: '';
		left: 13%;
		right: 13%;
		height: 1px;
		background-color: gray;
		z-index: -1;
	}
	.quotes{
		background-image: url('img/bg-review.webp');
		background-repeat: no-repeat;
		background-size: cover;
		width:calc(100vw + 15px);	
		background-color: #171717;	
	}
	.quotes__quote{
		width: 44px !important;
	}
	.quotes__img{
		width: 90px !important;
	}
	.quotes__para-width {
		width: 95%;
	}
	.fs-primary {
		font-size: 1.3rem;
	}
	.fs-text {
		font-size: 0.9rem;
	}
	.service__des-width{
		width: 95%;
	}
	.news__height{
		height: 100%;
	}
		.news__img-width{
			width: 45%;
		}
		.news__text {
			font-size: 1rem;
		}	
		.multiline-ellipsis-news-para {
			display: none !important;
		}
		.hero__text{
	    	font-size: 0.8rem !important;
	    }
	    .hero__title{
	    	font-size: 1.5rem !important;
	    }
	/*Tablet*/
	@media (min-width: 768px){
		.fs-primary {
			font-size: 2rem;
		}
		.service__des-width{
			width: 75%;
		}	
		.fs-text {
			font-size: 1rem;
		}
		.quotes__para-width {
			width: 75%;
		}	
		.news__img-width{
			width: 100%;
		}	
		.news__text {
			font-size: 1.2rem;
		}	
		.multiline-ellipsis-news-para {
			display: -webkit-box !important;
		}	    
		.hero__text{
	    	font-size: 1.5rem !important;
	    }
	    .hero__title{
	    	font-size: 3rem !important;
	    }		
	}
	/*PC*/
	@media (min-width: 1200px){
		.quotes__para-width {
			width: 50%;
		}
		.news__height{
			height: auto;
		}		

	}

    .multiline-ellipsis {
 	 overflow: hidden;
 	 display: -webkit-box;
 	 -webkit-box-orient: vertical;
  	 -webkit-line-clamp: 3; /* start showing ellipsis when 3rd line is reached */
	}
    .multiline-ellipsis-news-title {
 	 overflow: hidden;
 	 display: -webkit-box;
 	 -webkit-box-orient: vertical;
  	 -webkit-line-clamp: 2; /* start showing ellipsis when 3rd line is reached */
	}
</style>

<!-- --------------------------------------- START HERO --------------------------------- -->
	<div class="hero row">
		<div class="d-flex flex-column align-items-center text-light">
			<img class="w-25 py-4 d-lg-block d-none" src="img/logo_slider_1.webp" alt="">
			<h1 class="py-lg-3 pt-5 text-uppercase text-primary fw-800 text-center hero__title">Xăm hình nghệ thuật</h1>
			<span class="pt-lg-3 pb-lg-5 py-3 text-center hero__text">Để hình xăm đến gần hơn với cuộc sống <br> Ghi dấu kỷ niệm đẹp, dấu ấn khó phai trong cuộc đời </span>
			<button class="btn rounded-0 bg-primary py-md-3 px-md-5 p-2 text-light my-lg-3 mb-5 mt-3">Đặt lịch ngay</button>
		</div>
	</div>
<!-- --------------------------------------- END HERO ----------------------------------- -->
<!-- --------------------------------------- START GREET --------------------------------- -->
	<div class="greet row bg-secondary text-light">
		<div class="d-flex flex-md-nowrap flex-wrap">
			<img class="col-md-6 col-12" src="img/banner_welcome.webp" alt="">
			<div class="col-md-6 col-12 py-lg-5 ps-lg-5 pe-lg-3 p-3 text-md-start text-center">
				<p class="py-2 m-0">
					Chào mừng đến với studio
				</p>
				<h2 class="py-2 m-0 text-uppercase display-6 fw-bold text-primary">
					Tattoo Thien Minh
				</h2>
				<p class="py-2 m-0 text-primary fst-italic fs-text">
					"Hình xăm mang theo câu chuyện riêng về cuộc đời của  mỗi khách hàng, và tôi kể lại nó bằng linh hồn mình qua những mũi kim." <br>- Artist Thiên Minh
				</p>
				<p class="py-2 m-0 d-lg-block d-none">
					Era tattoo là studio tiên phong trong thời kỳ cách mạng về xăm hình văn minh từ năm 2014, góp phần thay đổi định kiến của xã hội đối với bộ môn nghệ thuật cơ thể xứng đáng được coi trọng này.
				</p>
				<p class="py-2 m-0 d-lg-block d-none">
					Chúng tôi luôn không ngừng trau dồi học hỏi và cập nhập những kỹ thuật, tri thức, dụng cụ tối tân để xăm đẹp hơn mỗi ngày, để hình xăm khách hàng nhận được là đẳng cấp thế giới - còn chi phí thì rất Việt Nam.
				</p>
				<button class="btn rounded-0 bg-primary py-3 px-5 text-light my-3">Đặt lịch ngay</button>
			</div>
		</div>
	</div>
<!-- --------------------------------------- END GREET --------------------------------- -->
<!-- -------------------------------------- START SERVICE ------------------------------ -->
	<div class="service row text-light px-md-4 py-5 px-2" style="background-color: #2e2e2e;">
		<div class="text-center">
			<h2 class="text-uppercase fw-bold p-3 fs-primary">Dịch vụ cung cấp</h2>
			<p class="mx-auto service__des-width fs-text">Thợ tay nghề cao trên mười năm kinh nghiệm, có giấy phép hành nghề. Trang thiết bị vô cùng hiện đại. Địa chỉ xăm uy tín trên 10 năm kinh nghiệm. Được bảo hành trọn đời, giá xăm tốt nhất tại TPHCM.</p>
			<div class="d-lg-flex d-none p-4">
				<div class="p-2">
					<img class="col-3 w-100" src="img/wallpaperflare-com-wallpaper-24.webp" alt="">
				</div>
				<div class="p-2">
					<img class="col-3 w-100" src="img/wallpaperflare-com-wallpaper-24.webp" alt="">
				</div>
				<div class="p-2">
					<img class="col-3 w-100" src="img/wallpaperflare-com-wallpaper-24.webp" alt="">
				</div>
				<div class="p-2">
					<img class="col-3 w-100" src="img/wallpaperflare-com-wallpaper-24.webp" alt="">
				</div>
			</div>
			<div class="d-flex d-lg-none owl-carousel owl-theme p-md-3 p-0" id="service__carousel">

			    <div class="item d-flex flex-column">
					<div>
						<img class="w-100" src="img/wallpaperflare-com-wallpaper-24.webp" alt="">
					</div>  
					<div class="bg-dark text-light pb-5 d-block d-md-none">
						<img class="mx-auto py-3" style="width: 61px;" src="img/pen_tattoo.webp" alt="">
						<h2 class="text-uppercase fw-bold fs-6 text-primary px-3">Đi tìm ý nghĩa hình xăm con hạc giấy trong cuộc sống</h2>
						<p class="multiline-ellipsis px-4 fs-text">
							Xăm hình đầu lâu lên cơ thể không còn xa lạ với mọi người ngày nay đặc biệt là những người đam mê với nghệ thuật xăm hình. Vậy các bạn có hiểu được ý nghĩa hình xăm đầu lâu này hay không? Dưới đây là những chia sẻ của...
						</p>
					</div> 	
			    </div>

			</div>
			<button class="btn rounded-0 bg-primary py-3 px-5 text-light my-3">Đặt lịch ngay</button>			
		</div>
	</div>
<!-- --------------------------------------- END SERVICE --------------------------------- -->
<!-- --------------------------------------- START ALBUM --------------------------------- -->
	<div class="album row bg-white text-dark p-lg-5 p-md-4 p-2">
		<div class="text-center">
			<h2 class="text-uppercase fw-bold p-3 fs-primary">Tác phẩm tattoo Thiên Minh</h2>
			<p class="service__des-width mx-auto fs-text">Đây là Album do các Artist của Tattoo Thiên Minh thực hiện</p>
			<ul class="list-unstyled d-flex align-items-center justify-content-between border-bottom overflow-scroll">
				<li  class="py-2 px-3 border-bottom border-primary"><a class="text-nowrap text-decoration-none text-uppercase text-primary fw-primary" href="#">
					Hình xăm 3D
				</a></li>
				<li  class="py-2 px-3"><a class="text-nowrap text-decoration-none text-uppercase text-dark fw-primary" href="#">
					
					Hình xăm mini
				
				</a></li>				
				<li  class="py-2 px-3"><a class="text-nowrap text-decoration-none text-uppercase text-dark fw-primary" href="#">
					
					Hình xăm tả thực
				
				</a></li>				
				<li  class="py-2 px-3"><a class="text-nowrap text-decoration-none text-uppercase text-dark fw-primary" href="#">
					
					Hình xăm che thẹo
				
				</a></li>				
				<li  class="py-2 px-3"><a class="text-nowrap text-decoration-none text-uppercase text-dark fw-primary" href="#">
					
					Hình xăm phong thủy
				
				</a></li>				
				<li  class="py-2 px-3"><a class="text-nowrap text-decoration-none text-uppercase text-dark fw-primary" href="#">
					Hình xăm 3D
				</a></li>
			</ul>
			<div class="d-md-block d-none">
				<div class="d-flex">
					<img class="p-2 col-4 album__img" src="img/wallpaperflare-com-wallpaper-1.webp" alt="">
					<img class="p-2 col-3 album__img" src="img/wallpaperflare-com-wallpaper-1.webp" alt="">
					<img class="p-2 col-5 album__img" src="img/wallpaperflare-com-wallpaper-36.webp" alt="">
				</div>
				<div class="d-flex">
					<img class="p-2 col-5 album__img" src="img/wallpaperflare-com-wallpaper-36.webp" alt="">
					<img class="p-2 col-4 album__img" src="img/wallpaperflare-com-wallpaper-4.webp" alt="">
					<img class="p-2 col-3 album__img" src="img/wallpaperflare-com-wallpaper-4.webp" alt="">
				</div>
			</div>

			<div class="d-flex d-md-none owl-carousel owl-theme p-md-3 p-0" id="album__carousel">

			    <div class="item">
					<img class="w-100 col-3" src="img/wallpaperflare-com-wallpaper-1.webp" alt="">
			    </div>

			</div>

		</div>
	</div>
<!-- --------------------------------------- END ALBUM --------------------------------- -->
<!-- --------------------------------------- START PRICE --------------------------------- -->
	<div class="price row p-lg-5 p-md-4 p-2 text-dark bg-white">
		<div class="text-center">
			<h2 class="text-uppercase fw-bold p-3 fs-primary">Báo giá dịch vụ</h2>
			<p class="service__des-width mx-auto fs-text">Để giúp khách hàng dễ hình dung về mức giá của từng loại hình xăm, Tattoo Thiên Minh sẽ đưa ra 3 mức độ: LEVEL 1, LEVEL 2, LEVEL 3 tương ứng với sự tăng dần về độ khó, độ chi tiết, và thời gian thực hiện</p>
			<div class="d-lg-flex d-none">

				<div class="p-2 col-4">
					<div class="border p-5 text-start">
						<h3 class="text-uppercase fw-bold">
							
							Hình xăm <br> Phong Thủy
						
						</h3>
						<hr class="w-25">
						<div>
							<p class="d-flex flex-column py-2">
								<span class="fs-5"><b>Level 1: 500.000đ</b></span>
								<span>Thời gian 15 - 30 phút</span>
							</p>
							<p class="d-flex flex-column py-2">
								<span class="fs-5"><b>Level 1: 500.000đ</b></span>
								<span>Thời gian 15 - 30 phút</span>
							</p>
							<p class="d-flex flex-column py-2">
								<span class="fs-5"><b>Level 1: 500.000đ</b></span>
								<span>Thời gian 15 - 30 phút</span>
							</p>
						</div>
						<button class="btn bg-primary px-4 py-2 mt-3 rounded-0 text-light fw-bold">Đặt lịch</button>
					</div>
				</div>

				<div class="p-2 col-4">
					<div class="border p-5 text-start">
						<h3 class="text-uppercase fw-bold">
							
							Hình xăm <br> Phong Thủy
						
						</h3>
						<hr class="w-25">
						<div>
							<p class="d-flex flex-column py-2">
								<span class="fs-5"><b>Level 1: 500.000đ</b></span>
								<span>Thời gian 15 - 30 phút</span>
							</p>
							<p class="d-flex flex-column py-2">
								<span class="fs-5"><b>Level 1: 500.000đ</b></span>
								<span>Thời gian 15 - 30 phút</span>
							</p>
							<p class="d-flex flex-column py-2">
								<span class="fs-5"><b>Level 1: 500.000đ</b></span>
								<span>Thời gian 15 - 30 phút</span>
							</p>
						</div>
						<button class="btn bg-primary px-4 py-2 mt-3 rounded-0 text-light fw-bold">Đặt lịch</button>
					</div>
				</div>

				<div class="p-2 col-4">
					<div class="border p-5 text-start">
						<h3 class="text-uppercase fw-bold">
							
							Hình xăm <br> Phong Thủy
						
						</h3>
						<hr class="w-25">
						<div>
							<p class="d-flex flex-column py-2">
								<span class="fs-5"><b>Level 1: 500.000đ</b></span>
								<span>Thời gian 15 - 30 phút</span>
							</p>
							<p class="d-flex flex-column py-2">
								<span class="fs-5"><b>Level 1: 500.000đ</b></span>
								<span>Thời gian 15 - 30 phút</span>
							</p>
							<p class="d-flex flex-column py-2">
								<span class="fs-5"><b>Level 1: 500.000đ</b></span>
								<span>Thời gian 15 - 30 phút</span>
							</p>
						</div>
						<button class="btn bg-primary px-4 py-2 mt-3 rounded-0 text-light fw-bold">Đặt lịch</button>
					</div>
				</div>


			</div>
			<div class="d-flex d-lg-none owl-carousel owl-theme p-md-3 p-0" id="price__carousel">

			    <div class="item">
					<div class="p-2">
						<div class="border p-5 text-start">
							<h3 class="text-uppercase fw-bold">
								
								Hình xăm <br> Phong Thủy
							
							</h3>
							<hr class="w-25">
							<div>
								<p class="d-flex flex-column py-2">
									<span class="fs-5"><b>Level 1: 500.000đ</b></span>
									<span>Thời gian 15 - 30 phút</span>
								</p>
								<p class="d-flex flex-column py-2">
									<span class="fs-5"><b>Level 1: 500.000đ</b></span>
									<span>Thời gian 15 - 30 phút</span>
								</p>
								<p class="d-flex flex-column py-2">
									<span class="fs-5"><b>Level 1: 500.000đ</b></span>
									<span>Thời gian 15 - 30 phút</span>
								</p>
							</div>
							<button class="btn bg-primary px-4 py-2 mt-3 rounded-0 text-light fw-bold">Đặt lịch</button>
						</div>
					</div>
			    </div>

			</div>
		</div>
	</div>
<!-- --------------------------------------- END PRICE --------------------------------- -->
<!-- --------------------------------------- START OUTSTANDING --------------------------- -->
	<div class="outstanding row bg-secondary text-light px-4 py-5">
		<div class="text-center">
			<h2 class="text-uppercase fw-bold p-3 fs-primary">Tác phẩm nổi bật</h2>
			<div class="d-lg-flex d-none p-4">
				<div class="p-2">
					<img class="col-3 w-100" src="img/wallpaperflare-com-wallpaper-24.webp" alt="">
				</div>
				<div class="p-2">
					<img class="col-3 w-100" src="img/wallpaperflare-com-wallpaper-24.webp" alt="">
				</div>
				<div class="p-2">
					<img class="col-3 w-100" src="img/wallpaperflare-com-wallpaper-24.webp" alt="">
				</div>
				<div class="p-2">
					<img class="col-3 w-100" src="img/wallpaperflare-com-wallpaper-24.webp" alt="">
				</div>
			</div>


			<div class="d-flex d-lg-none owl-carousel owl-theme p-md-3 p-0" id="outstanding__carousel">

			    <div class="item">
					<div class="p-2">
						<img class="w-100" src="img/wallpaperflare-com-wallpaper-24.webp" alt="">
					</div>
			    </div>

			</div>		

			<button class="btn rounded-0 bg-primary py-3 px-5 text-light my-3">Đặt lịch ngay</button>			
		</div>
		
	</div>
<!-- --------------------------------------- END OUTSTANDING ----------------------------- -->
<!-- --------------------------------------- START ADS --------------------------------- -->
	<div class="ads row p-lg-5 p-md-4 p-2 bg-dark text-light">
		<div class="d-flex align-items-center justify-content-between flex-column flex-lg-row">
			<h2 class="display-5 fw-800 text-center">
				Khuyến mãi lên tới <b class="text-primary">30%</b>  mùa covid
			</h2>
			<button class="btn rounded-0 bg-primary py-md-3 px-md-5 py-2 px-3 text-light my-3">Đặt lịch ngay</button>				
		</div>
	</div>
<!-- --------------------------------------- END ADS ------------------------------------- -->
<!-- --------------------------------------- START ARTIST -------------------------------- -->
	<div class="artist row p-lg-5 p-md-4 p-2 text-white bg-secondary">
		<div class="text-center">
			<h2 class="text-uppercase fw-bold p-3 fs-primary">artists</h2>
			<p class="service__des-width mx-auto fs-text">Những Artist được đào tạo bài bản, kinh nghiệm nghề lâu năm uy tín trong ngành xăm</p>
			<div class="d-lg-flex d-none">

				<div class="p-2 col-4">
					<img class="w-100" src="img/image_artist_2.webp" alt="">
					<h4 class="text-uppercase text-primary fs-6 m-0 py-2">
						Alex Phuong Tattoo
					</h4>
					<span class="fst-italic my-2">Chuyên thể loại Nhật cổ</span>
					<div class="py-3">
						<i class="bg-primary text-white p-2 fs-5 bi bi-telephone-fill"></i>
						<i class="bg-primary text-white p-2 fs-5 bi bi-facebook"></i>
						<i class="bg-primary text-white p-2 fs-5 bi bi-instagram"></i>
					</div>
				</div>

				<div class="p-2 col-4">
					<img class="w-100" src="img/image_artist_2.webp" alt="">
					<h4 class="text-uppercase text-primary fs-6 m-0 py-2">
						Alex Phuong Tattoo
					</h4>
					<span class="fst-italic my-2">Chuyên thể loại Nhật cổ</span>
					<div class="py-3">
						<i class="bg-primary text-white p-2 fs-5 bi bi-telephone-fill"></i>
						<i class="bg-primary text-white p-2 fs-5 bi bi-facebook"></i>
						<i class="bg-primary text-white p-2 fs-5 bi bi-instagram"></i>
					</div>
				</div>
				
				<div class="p-2 col-4">
					<img class="w-100" src="img/image_artist_2.webp" alt="">
					<h4 class="text-uppercase text-primary fs-6 m-0 py-2">
						Alex Phuong Tattoo
					</h4>
					<span class="fst-italic my-2">Chuyên thể loại Nhật cổ</span>
					<div class="py-3">
						<i class="bg-primary text-white p-2 fs-5 bi bi-telephone-fill"></i>
						<i class="bg-primary text-white p-2 fs-5 bi bi-facebook"></i>
						<i class="bg-primary text-white p-2 fs-5 bi bi-instagram"></i>
					</div>
				</div>


			</div>

			<div class="d-flex d-lg-none owl-carousel owl-theme p-md-3 p-0" id="artist__carousel">

			    <div class="item">
					<div class="p-2">
						<img class="w-100" src="img/image_artist_2.webp" alt="">
						<h4 class="text-uppercase text-primary fs-6 m-0 py-2">
							Alex Phuong Tattoo
						</h4>
						<span class="fst-italic my-2">Chuyên thể loại Nhật cổ</span>
						<div class="py-3">
							<i class="bg-primary text-white p-2 fs-5 bi bi-telephone-fill"></i>
							<i class="bg-primary text-white p-2 fs-5 bi bi-facebook"></i>
							<i class="bg-primary text-white p-2 fs-5 bi bi-instagram"></i>
						</div>
					</div>
			    </div>

			</div>

		</div>
	</div>
<!------------------------------------------- END ARTIST --------------------------------- -->
<!-- --------------------------------------- START PROCESS ------------------------------- -->
	<div class="process row  p-lg-5 p-md-4 p-2">
		<div class="text-center">
			<h2 class="text-uppercase fw-bold p-3 fs-primary">Quy trình làm việc </h2>
			<p class="mx-auto fs-text service__des-width">Bạn có thể xăm hình lên bất cứ bộ phận nào của cơ thể, dù đó là nơi dễ nhìn thấy hay ẩn đi,
			 xong bạn nên hiểu hình xăm có thể đi theo bạn suốt đời. Nên việc lựa chọn xăm hình gì, ở đâu,... 
			rất quan trọng. Hay để chúng tôi giúp bạn dễ lựa chọn hơn theo quy trình sau:</p>
			<div class="process__line d-md-flex d-none align-items-center justify-content-evenly py-4 position-relative">
				<div class="d-flex flex-column">
					<img src="img/image_step_1.webp" alt="">
					<span class="text-uppercase fw-bold p-3">
						Ý tưởng 
					</span>
				</div>
				<div class="d-flex flex-column">
					<img src="img/image_step_2.webp" alt="">
					<span class="text-uppercase fw-bold p-3">
						Thiết kế 
					</span>
				</div>
				<div class="d-flex flex-column">
					<img src="img/image_step_3.webp" alt="">
					<span class="text-uppercase fw-bold p-3">
						Báo giá 
					</span>
				</div>
				<div class="d-flex flex-column">
					<img src="img/image_step_4.webp" alt="">
					<span class="text-uppercase fw-bold p-3">
						Xăm hình
					</span>
				</div>
			</div>

			<div class="d-flex d-md-none flex-column owl-carousel owl-theme p-md-3 p-0" id="process__carousel">

			    <div class="item">
					<div class="d-flex flex-column">
						<img src="img/image_step_1.webp" alt="">
						<span class="text-uppercase fw-bold p-3">
							Ý tưởng 
						</span>
					</div>
			    </div>
			    <div class="item">
					<div class="d-flex flex-column">
						<img src="img/image_step_2.webp" alt="">
						<span class="text-uppercase fw-bold p-3">
							Thiết kế 
						</span>
					</div>
			    </div>
			    <div class="item">
					<div class="d-flex flex-column">
						<img src="img/image_step_3.webp" alt="">
						<span class="text-uppercase fw-bold p-3">
							Báo giá 
						</span>
					</div>
			    </div>
			    <div class="item">
					<div class="d-flex flex-column">
						<img src="img/image_step_4.webp" alt="">
						<span class="text-uppercase fw-bold p-3">
							Xăm hình
						</span>
					</div>
			    </div>

			</div>

			<button class="btn rounded-0 bg-primary py-3 px-5 text-light mt-5 mb-3">Đặt lịch ngay</button>				

		</div>
	</div>
<!-- --------------------------------------- END PROCESS --------------------------------- -->
<!-- --------------------------------------- START QUOTES --------------------------------- -->
	<div class="quotes row text-light  p-lg-5 p-md-4 p-2">
		<div>
			<div>
				<div class="owl-carousel owl-theme" id="quotes1__carousel">

		    		<div class="item text-center">
		    			<img class="quotes__quote mx-auto py-4" src="img/dau-phay.webp" alt="">
		    			<p class="quotes__para-width mx-auto" style="font-size: 0.9rem;">
						"Em chẳng biết nói gì ngoài một từ "Tuyệt vời". Mọi thứ đều tuyệt. Từ con người, không gian, cách phục vụ và tuyệt vời nhất là tác phẩm mà artist Ngọc thực hiện cho em. Một địa chỉ xăm uy tín, chắc chắn e phải quay lại đây vài lần nữa."
						</p>
		    			<span class="text-primary fs-5">
						Phương Jeni
						</span>
		    		</div>

		    		<div class="item text-center">
		    			<img class="quotes__quote mx-auto py-4" src="img/dau-phay.webp" alt="">
		    			<p class="quotes__para-width mx-auto" style="font-size: 0.9rem;">
						"Em chẳng biết nói gì ngoài một từ "Tuyệt vời". Mọi thứ đều tuyệt. Từ con người, không gian, cách phục vụ và tuyệt vời nhất là tác phẩm mà artist Ngọc thực hiện cho em. Một địa chỉ xăm uy tín, chắc chắn e phải quay lại đây vài lần nữa."
						</p>
		    			<span class="text-primary fs-5">
						Phương Jeni
						</span>
		    		</div>


		    		<div class="item text-center">
		    			<img class="quotes__quote mx-auto py-4" src="img/dau-phay.webp" alt="">
		    			<p class="quotes__para-width mx-auto" style="font-size: 0.9rem;">
						"Em chẳng biết nói gì ngoài một từ "Tuyệt vời". Mọi thứ đều tuyệt. Từ con người, không gian, cách phục vụ và tuyệt vời nhất là tác phẩm mà artist Ngọc thực hiện cho em. Một địa chỉ xăm uy tín, chắc chắn e phải quay lại đây vài lần nữa."
						</p>
		    			<span class="text-primary fs-5">
						Phương Jeni
						</span>
		    		</div>



		    		<div class="item text-center">
		    			<img class="quotes__quote mx-auto py-4" src="img/dau-phay.webp" alt="">
		    			<p class="quotes__para-width mx-auto" style="font-size: 0.9rem;">
						"Em chẳng biết nói gì ngoài một từ "Tuyệt vời". Mọi thứ đều tuyệt. Từ con người, không gian, cách phục vụ và tuyệt vời nhất là tác phẩm mà artist Ngọc thực hiện cho em. Một địa chỉ xăm uy tín, chắc chắn e phải quay lại đây vài lần nữa."
						</p>
		    			<span class="text-primary fs-5">
						Phương Jeni
						</span>
		    		</div>

		 		</div>
	  		</div>
	  		<div class="mx-auto py-5" style="width: 30%;">
		            <div class="owl-carousel owl-theme owl-loaded owl-drag position-relative p-0" id="quotes2__carousel">
	                    <div class="owl-stage-outer">
	                        <div class="owl-stage" style="transform: translate3d(-1527px, 0px, 0px); transition: all 0.25s ease 0s; width: 3334px;">

	                            <div class="owl-item p-0">
	                                <div class="item quotes__img mx-auto">
	                                    <img  src="img/img_review_1.webp" class="rounded-circle p-0" class="w-100" alt="...">
	                                </div>
	                            </div>
	                             <div class="owl-item p-0">
	                                <div class="item quotes__img mx-auto">
	                                    <img  src="img/img_review_1.webp" class="rounded-circle p-0" class="w-100" alt="...">     
	                                </div>
	                            </div> 
	                            <div class="owl-item p-0 active">
	                                <div class="item quotes__img mx-auto">
	                                    <img  src="img/img_review_1.webp" class="rounded-circle p-0" class="w-100" alt="...">
	                                </div>
	                            </div> 
	                            <div class="owl-item p-0">
	                                <div class="item quotes__img mx-auto">
	                                    <img  src="img/img_review_1.webp" class="rounded-circle p-0" class="w-100" alt="..."> 
	                                </div>
	                        	</div>

	                    	</div>

		                    <button style="bottom: 25%;" 
		                    		class="customPrevBtn position-absolute start-0 border-0 bg-primary rounded-circle fs-3 fw-bolder text-white">
		                    <</button> 
		                    <button style="bottom: 25%;" 
		                    		class="customNextBtn position-absolute end-0 border-0 bg-primary rounded-circle fs-3 fw-bolder text-white">>
		                    </button>
	            		</div>
	  				</div>
			</div>
		</div>
	</div>
<!-- --------------------------------------- END QUOTES --------------------------------- -->

<!-- --------------------------------------- START NEWS --------------------------------- -->
	<div class="news row  p-lg-5 p-md-4 p-2 pb-0">
		<div>
			<h2 class="text-uppercase fw-bold p-3 text-center fs-primary">Tin Tức </h2>

			<div class="d-flex flex-lg-nowrap flex-wrap">

				<div class="p-2 col-lg-4 col-12 news__height">
					<img class="w-100 h-50" src="img/image_artist_2.webp" alt="">
					<h4 class="news__text m-0 py-3 fw-bold">
						Mách nhỏ chăm sóc hình xăm mới với 4 bước đơn giản A - Z
					</h4>
					<span style="opacity: 0.6;">
						<span>
							Cafein Team
						</span>
						<span>
							| 
						</span>	
						<span> 

							Ngày 22/11/2021
		
						</span>
					</span>
					<span class="multiline-ellipsis my-3" style="opacity: 0.6;">
							Bước 1: Băng bảo vệ hình xăm ngay sau khi xăm và tháo băng sau 1 - 2 giờ
							Bước 2: Trong 7 ngày đầu: Luôn rửa sạch hình xăm với xà phòng nhẹ và nước ấm ít nhất 3 lần/ngày. Rửa vào buổi sáng sau khi ngủ dậy
							Tuyệt đối không sử dụng các loại xà phòng có nhiều hóa chất tạo mùi, tạo màu và chứa nhiều sút, axit  
							Bước 3: Thấm khô vùng da xăm sau đó nhẹ nhàng bôi lên 1 lớp mỡ kháng khuẩn hoặc 1 số loại kem giúp hồi phục da, chống các vi khuẩn gây bệnh. 
							 
							Kinh nghiệm cá nhân: Sau khi xăm các bạn nhớ hỏi các loại kem bôi này tại tiệm xăm nhé..thường thì họ có nhưng do bận hoặc quên nên sẽ không đưa.

							Sau đó từ ngày thứ 4 trở đi cho đến khi hình xăm hoàn toàn lành (1 tháng) Bôi 1 lượng nhỏ kem dưỡng da mỗi 3 lần/ ngày để dưỡng ẩm hình xăm , giảm tình trạng khô da. 
							 
							Nhưng nhớ là chỉ bôi 1 lượng nhỏ , mỏng lên bề mặt hình xăm chứ không nên bôi quá nhiều sẽ gây phản ứng không tốt cho da.

							Các sản phẩm thông dụng: Dove , Aquaphor Healing Ointment.....
							Vì sao phải bôi kem dưỡng ẩm thường xuyên lên hình xăm
							 
							Bôi kem dưỡng ẩm thường xuyên sẽ giúp hình xăm lên vảy mỏng, quá trình bong sẽ nhẹ nhàng giảm tối đa tình trạng ngứa ngáy khó chịu...Hơn nữa nó khiến hình xăm có màu tươi và sáng.
							 
							Recommend cho các bạn nên dùng các loại kem dưỡng ẩm dành cho da khô là phụ hợp nhất.
							 

							Tips nhỏ: nếu bạn không có kem dưỡng ẩm thì có thể thay thế bằng cách sử dụng các loại kcn dành cho trẻ em đều được hết nhé!
							Chỗ xăm bị ngứa phải làm sao?
							 
							Ok, cảm giác này rất là rất khó chịu nhưng đừng có " NGỨA THÌ GÃI " nhé :)))

							Đây là vấn đề bình thường thôi thi thoảng chỗ xăm rất ngứa và nóng rát NHƯNG nhớ tuyệt đối không được gãi và cậy nó. Bạn chỉ cần rửa nhẹ nhàng thì sẽ giảm được sự khó chịu ngay và bôi 1 lớp kem ẩm nhẹ nhàng lên trên.
							 
							Làm gì sau khi lớp vảy bong hết?

							Sau khoảng 7 - 10 ngày lớp vảy thông thường sẽ tự bong hết và hình xăm của chúng ta bắt đầu lộ ra. Lúc này hình xăm trông có vẻ nhạt màu. Đừng lo lắng! Lớp da sẽ dần già và thành da bình thường khi đó màu sắc của hình xăm sẽ được phục hồi thông thường sau khoảng 1 - 2 tháng mọi hình xăm bắt đầu ổn định và rất đẹp.
			
					</span>
					<span class="d-none d-md-inline">Xem thêm >></span>
					<hr>
				</div>
				<div class="p-2 col-lg-4 col-12 news__height d-flex d-md-block">
					<img class="news__img-width h-50" src="img/wallpaperflare-com-wallpaper-1.webp" alt="">
					<div class="p-2">
						<h4 class="news__text m-0 py-md-3 my-1 fw-bold multiline-ellipsis-news-title">
							Mách nhỏ chăm sóc hình xăm mới với 4 bước đơn giản A - Z
						</h4>
						<span style="opacity: 0.6;">
							<span>
								Cafein Team
							</span>
							<span>
								| 
							</span>	
							<span> 

								Ngày 22/11/2021
			
							</span>
						</span>
						<span class="multiline-ellipsis my-3 multiline-ellipsis-news-para" style="opacity: 0.6;">
								Bước 1: Băng bảo vệ hình xăm ngay sau khi xăm và tháo băng sau 1 - 2 giờ
								Bước 2: Trong 7 ngày đầu: Luôn rửa sạch hình xăm với xà phòng nhẹ và nước ấm ít nhất 3 lần/ngày. Rửa vào buổi sáng sau khi ngủ dậy
								Tuyệt đối không sử dụng các loại xà phòng có nhiều hóa chất tạo mùi, tạo màu và chứa nhiều sút, axit  
								Bước 3: Thấm khô vùng da xăm sau đó nhẹ nhàng bôi lên 1 lớp mỡ kháng khuẩn hoặc 1 số loại kem giúp hồi phục da, chống các vi khuẩn gây bệnh. 
								 
								Kinh nghiệm cá nhân: Sau khi xăm các bạn nhớ hỏi các loại kem bôi này tại tiệm xăm nhé..thường thì họ có nhưng do bận hoặc quên nên sẽ không đưa.

								Sau đó từ ngày thứ 4 trở đi cho đến khi hình xăm hoàn toàn lành (1 tháng) Bôi 1 lượng nhỏ kem dưỡng da mỗi 3 lần/ ngày để dưỡng ẩm hình xăm , giảm tình trạng khô da. 
								 
								Nhưng nhớ là chỉ bôi 1 lượng nhỏ , mỏng lên bề mặt hình xăm chứ không nên bôi quá nhiều sẽ gây phản ứng không tốt cho da.

								Các sản phẩm thông dụng: Dove , Aquaphor Healing Ointment.....
								Vì sao phải bôi kem dưỡng ẩm thường xuyên lên hình xăm
								 
								Bôi kem dưỡng ẩm thường xuyên sẽ giúp hình xăm lên vảy mỏng, quá trình bong sẽ nhẹ nhàng giảm tối đa tình trạng ngứa ngáy khó chịu...Hơn nữa nó khiến hình xăm có màu tươi và sáng.
								 
								Recommend cho các bạn nên dùng các loại kem dưỡng ẩm dành cho da khô là phụ hợp nhất.
								 

								Tips nhỏ: nếu bạn không có kem dưỡng ẩm thì có thể thay thế bằng cách sử dụng các loại kcn dành cho trẻ em đều được hết nhé!
								Chỗ xăm bị ngứa phải làm sao?
								 
								Ok, cảm giác này rất là rất khó chịu nhưng đừng có " NGỨA THÌ GÃI " nhé :)))

								Đây là vấn đề bình thường thôi thi thoảng chỗ xăm rất ngứa và nóng rát NHƯNG nhớ tuyệt đối không được gãi và cậy nó. Bạn chỉ cần rửa nhẹ nhàng thì sẽ giảm được sự khó chịu ngay và bôi 1 lớp kem ẩm nhẹ nhàng lên trên.
								 
								Làm gì sau khi lớp vảy bong hết?

								Sau khoảng 7 - 10 ngày lớp vảy thông thường sẽ tự bong hết và hình xăm của chúng ta bắt đầu lộ ra. Lúc này hình xăm trông có vẻ nhạt màu. Đừng lo lắng! Lớp da sẽ dần già và thành da bình thường khi đó màu sắc của hình xăm sẽ được phục hồi thông thường sau khoảng 1 - 2 tháng mọi hình xăm bắt đầu ổn định và rất đẹp.
				
						</span>
					</div>
					
					<span class="d-none d-md-inline">Xem thêm >></span>
				</div>
				<div class="p-2 col-lg-4 col-12 news__height d-flex d-md-block">
					<img class="news__img-width h-50" src="img/wallpaperflare-com-wallpaper-36.webp" alt="">
					<div class="p-2">
						<h4 class="news__text m-0 py-md-3 my-1 fw-bold multiline-ellipsis-news-title">
							Mách nhỏ chăm sóc hình xăm mới với 4 bước đơn giản A - Z
						</h4>
						<span style="opacity: 0.6;">
							<span>
								Cafein Team
							</span>
							<span>
								| 
							</span>	
							<span> 

								Ngày 22/11/2021
			
							</span>
						</span>
					</div>

					<span class="multiline-ellipsis my-3 multiline-ellipsis-news-para" style="opacity: 0.6;">
							Bước 1: Băng bảo vệ hình xăm ngay sau khi xăm và tháo băng sau 1 - 2 giờ
							Bước 2: Trong 7 ngày đầu: Luôn rửa sạch hình xăm với xà phòng nhẹ và nước ấm ít nhất 3 lần/ngày. Rửa vào buổi sáng sau khi ngủ dậy
							Tuyệt đối không sử dụng các loại xà phòng có nhiều hóa chất tạo mùi, tạo màu và chứa nhiều sút, axit  
							Bước 3: Thấm khô vùng da xăm sau đó nhẹ nhàng bôi lên 1 lớp mỡ kháng khuẩn hoặc 1 số loại kem giúp hồi phục da, chống các vi khuẩn gây bệnh. 
							 
							Kinh nghiệm cá nhân: Sau khi xăm các bạn nhớ hỏi các loại kem bôi này tại tiệm xăm nhé..thường thì họ có nhưng do bận hoặc quên nên sẽ không đưa.

							Sau đó từ ngày thứ 4 trở đi cho đến khi hình xăm hoàn toàn lành (1 tháng) Bôi 1 lượng nhỏ kem dưỡng da mỗi 3 lần/ ngày để dưỡng ẩm hình xăm , giảm tình trạng khô da. 
							 
							Nhưng nhớ là chỉ bôi 1 lượng nhỏ , mỏng lên bề mặt hình xăm chứ không nên bôi quá nhiều sẽ gây phản ứng không tốt cho da.

							Các sản phẩm thông dụng: Dove , Aquaphor Healing Ointment.....
							Vì sao phải bôi kem dưỡng ẩm thường xuyên lên hình xăm
							 
							Bôi kem dưỡng ẩm thường xuyên sẽ giúp hình xăm lên vảy mỏng, quá trình bong sẽ nhẹ nhàng giảm tối đa tình trạng ngứa ngáy khó chịu...Hơn nữa nó khiến hình xăm có màu tươi và sáng.
							 
							Recommend cho các bạn nên dùng các loại kem dưỡng ẩm dành cho da khô là phụ hợp nhất.
							 

							Tips nhỏ: nếu bạn không có kem dưỡng ẩm thì có thể thay thế bằng cách sử dụng các loại kcn dành cho trẻ em đều được hết nhé!
							Chỗ xăm bị ngứa phải làm sao?
							 
							Ok, cảm giác này rất là rất khó chịu nhưng đừng có " NGỨA THÌ GÃI " nhé :)))

							Đây là vấn đề bình thường thôi thi thoảng chỗ xăm rất ngứa và nóng rát NHƯNG nhớ tuyệt đối không được gãi và cậy nó. Bạn chỉ cần rửa nhẹ nhàng thì sẽ giảm được sự khó chịu ngay và bôi 1 lớp kem ẩm nhẹ nhàng lên trên.
							 
							Làm gì sau khi lớp vảy bong hết?

							Sau khoảng 7 - 10 ngày lớp vảy thông thường sẽ tự bong hết và hình xăm của chúng ta bắt đầu lộ ra. Lúc này hình xăm trông có vẻ nhạt màu. Đừng lo lắng! Lớp da sẽ dần già và thành da bình thường khi đó màu sắc của hình xăm sẽ được phục hồi thông thường sau khoảng 1 - 2 tháng mọi hình xăm bắt đầu ổn định và rất đẹp.
			
					</span>
					<span class="d-none d-md-inline">Xem thêm >></span>
				</div>
				<span class="ps-2 py-4 d-md-none d-inline">Xem thêm >></span>
			</div>

		</div>
	</div>
<!-- --------------------------------------- END NEWS ------------------------------------ -->

<script>

	var owl = $('#quotes1__carousel');
    owl.owlCarousel({
    loop: true,
    margin: 6,
    autoplay: false,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    items: 1,
    dots:false,
});
    $('.customNextBtn').click(function() {
    owl.trigger('next.owl.carousel');
})
// Go to the previous item
$('.customPrevBtn').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [300]);
})

	var owl1 = $('#quotes2__carousel');
    owl1.owlCarousel({
    loop: true,
    autoplay: false,
    autoplayTimeout: 3000,
    // autoplayHoverPause: true,
    nav: false,
    dots: false,
    responsive : {
    	0 : {
    		items: 1,
    	},
    	992 : {
    		items: 3,
    	},
    }

});
    $('.customNextBtn').click(function() {
    owl1.trigger('next.owl.carousel');
})
// Go to the previous item
$('.customPrevBtn').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl1.trigger('prev.owl.carousel', [300]);
})

$('#service__carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    items: 1,
    dots: true,
        responsive : {
    	0 : {
    		items: 1,
    	},
    	768 : {
    		items: 2,
    	},
    }
})

$('#album__carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    items: 1.5,
    dots: true,
})
$('#price__carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots: true,
            responsive : {
    	0 : {
    		items: 1,
    	},
    	768 : {
    		items: 2,
    	},
    }
    
})
$('#outstanding__carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots: true,
            responsive : {
    	0 : {
    		items: 1,
    	},
    	768 : {
    		items: 2,
    	},
    }
    
})
$('#artist__carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots: true,
            responsive : {
    	0 : {
    		items: 1,
    	},
    	768 : {
    		items: 2,
    	},
    }
    
})
$('#process__carousel').owlCarousel({
    loop:false,
    margin:10,
    nav:false,
    dots: true,
            responsive : {
    	0 : {
    		items: 2,
    	},
    	768 : {
    		items: 4,
    	},
    }
    
})
</script>