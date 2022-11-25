@extends('layouts.not-logged-navbar')

@section('content')
<div class="container mt-5 pt-3">
	<div class="row">
		<div class="col-lg-5 col-sm-12">
			<img src="../assets/images/team.png" width="100%" alt="">
		</div>
		<div class="col-lg-7 col-sm-12 pt-5">
			<div class="row mt-4">
				<div class="card m-3 p-5">
					<h3 class="text-color-primary">
						<b>
							About Us
						</b>
					</h3>
					<p class="text-grey mt-3">
						Smart EngTest is a website that can generate English test questions only from an article or text saved in .txt format. Smart EngTest also provides CBT services to facilitate the English exam process <br>
						<br>
						<span class="fw-bold text-color-primary"> Team: </span>
						<span class="text-color-secondary">
							Data Science Research, Universitas Pendidikan Indonesia
						</span>
					</p>
					<div class="row">
						<div class="col-1">
							<img src="https://upload.wikimedia.org/wikipedia/id/0/09/Logo_Almamater_UPI.svg" width="30px" alt="">
						</div>
						<div class="col-1">
							<img src="assets/images/logo-light.png" alt="logo-image" width="80px">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection