@extends('layouts/master')
@section('content')
			<section class="noo-page-heading eff">
				<div class="container">
					<div class="noo-heading-content">
						<h1 class="page-title eff">แก้ไขข้อมูลผลผลิต</h1>
					</div>
				</div>
			</section>
			<div class="main">
				<div class="commerce commerce-account noo-shop-main pt-5 pb-7">
					<div class="container">
						<div class="row">
							<div class="noo-main col-md-12">
								<div class="col-md-3"></div>
								<div id="addOrchard">
	                				<div class="col-md-6">
	                					<h2>แก้ไขข้อมูลผลผลิต</h2>
	                					<form class="login" method="POST" enctype="multipart/form-data" action="{{url('product',[$product->idProductSprint])}}">
	                						<input type="hidden" name="_method" value="PATCH">
											{{ csrf_field() }}
	                						<div class="form-row form-row-wide">
												<label for="username">
													ผลผลิต :
													<span class="required">*</span>
													<div style="float: right; width: 70%">
														<select name="idFruit" id="idFruit" class="form-matching" style="width: 50%; float: left;">
															@foreach ($fruits as $fruit)
													 		@if ($fruit->idFruit == $product->orchardPlot->fruitSpecie->fruit->idFruit)
													 			<option value="{{$fruit->idFruit}}" selected>{{$fruit->fruitName}}</option>
													 		@else
													 			<option value="{{$fruit->idFruit}}">{{$fruit->fruitName}}</option>
													 		@endif
													 						
												 		@endforeach
														</select>
														<select name="idFruitSpecie" class="form-matching" style="width: 50%; float: left;">
															@foreach ($fruitSpecies as $fruitSpecie)
													 		@if ($fruitSpecie->idFruitSpecie == $product->orchardPlot->idFruitSpecie)
													 			<option value="{{$fruitSpecie->idFruitSpecie}}" selected>{{$fruitSpecie->specieName}}</option>
													 		@else
													 			<option value="{{$fruitSpecie->idFruitSpecie}}">{{$fruitSpecie->specieName}}</option>
													 		@endif
												 		@endforeach			
														</select>
													</div>
												</label>
											</div>
											<div class="form-row form-row-wide">
												<label for="username">
													รายละเอียดผลผลิต :
													<span class="required">*</span>
													<textarea name="description" class="input-text" style="resize: none; width: 70%; float: right;">{{$product->description}}</textarea>
												</label>
											</div>
											<div class="form-row form-row-wide">
												<label for="username">
													จำนวนผลผลิต :
													<span class="required">*</span>
													<input type="text" class="input-text" name="fruitNum" id="username" placeholder="กิโลกรัมต่อรอบการผลิต" value="{{$product->fruitNum}}" style="width: 70%; float: right;" />
												</label>
											</div>
											<div class="form-row form-row-wide">
												<label for="username">
													ตั้งแต่วันที่ :
													<span class="required">*</span>
													<div style="width: 70%; float: right;">
														<div class='input-group date' id='datepickerstart' style="width: 50%; float: left;">
												            <input type='text' class="form-control" name="startDate" id="date" data-select="datepicker" placeholder="ตั้งแต่" value="{{$product->startDate}}" />
												            <span class="input-group-addon datepicker" data-toggle="datepicker">
												            	<span class="fa fa-calendar"></span>
												            </span>
												        </div>
											        </div>
												</label>
											</div>
											<div class="form-row form-row-wide">
												<label for="username">
													ถึงวันที่ :
													<span class="required">*</span>
													<div style="width: 70%; float: right;">
														<div class='input-group date' id='datepickerend' style="width: 50%; float: left;">
												            <input type='text' class="form-control" name="endDate" id="date" data-select="datepicker" placeholder="ถึง" value="{{$product->endDate}}" />
												            <span class="input-group-addon datepicker" data-toggle="datepicker">
												            	<span class="fa fa-calendar"></span>
												            </span>
												        </div>
											        </div>
												</label>
											</div>
											<div class="form-row form-row-wide">
												<label for="username">
													อัพโหลดรูป :
													<span class="required">*</span>
													<div style="float: right;">
														<input name="pictures[]" id="exampleInputFile" type="file" />
														<input name="pictures[]" id="exampleInputFile" type="file" />
														<input name="pictures[]" id="exampleInputFile" type="file" />
														<input name="pictures[]" id="exampleInputFile" type="file" />
													</div>
												</label>
											</div>
											<div class="form-row form-row-wide">
												<button type="submit" class="button" style="float: right;">
													บันทึก
												</button>
											</div>
	                						<div class="form-row form-row-wide"></div>
										</form>
									</div>
								</div>
							</div>
							<div class="col-md-3"></div>
						</div>
					</div>
				</div>
				<div class="noo-footer-shop-now">
					<div class="container">
						<div class="col-md-7">
							<h4>-  -</h4>
							<h3></h3>
						</div>
						<img src="images/organici-love-me.png" class="noo-image-footer" alt="" />
					</div>
				</div>
			</div>
@endsection