<?= $this->extend('template/booking-template', ['assetsPath' => $assetsPath]) ?>
<?= $this->section('content') ?>
<div class="col-xxl">
	<div class="card">
		<div class="card-header d-flex align-items-center justify-content-between">
			<h5>Form Separator</h5>
			<button class="btn btn-primary">Back</button>
		</div>
		<form class="card-body">
			<h6>1. Detail Akun</h6>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label" for="multicol-email">Email</label>
				<div class="col-sm-9">
					<div class="input-group input-group-merge">
						<input type="text" id="multicol-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="multicol-email2">
						<span class="input-group-text" id="multicol-email2">@example.com</span>
					</div>
				</div>
			</div>
			<div class="row form-password-toggle">
				<label class="col-sm-3 col-form-label" for="multicol-password">Password</label>
				<div class="col-sm-9">
					<div class="input-group input-group-merge">
						<input type="password" id="multicol-password" class="form-control" placeholder="············" aria-describedby="multicol-password2">
						<span class="input-group-text cursor-pointer" id="multicol-password2"><i class="ti ti-eye-off"></i></span>
					</div>
				</div>
			</div>
			<hr class="my-4 mx-n4">
			<h6>2. Personal Info</h6>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label" for="multicol-full-name">Full Name</label>
				<div class="col-sm-9">
					<input type="text" id="multicol-full-name" class="form-control" placeholder="John Doe">
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label" for="multicol-country">Country</label>
				<div class="col-sm-9">
					<div class="position-relative"><select id="multicol-country" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="multicol-country" tabindex="-1" aria-hidden="true">
							<option value="" data-select2-id="2">Select</option>
							<option value="Australia">Australia</option>
							<option value="Bangladesh">Bangladesh</option>
							<option value="Belarus">Belarus</option>
							<option value="Brazil">Brazil</option>
							<option value="Canada">Canada</option>
							<option value="China">China</option>
							<option value="France">France</option>
							<option value="Germany">Germany</option>
							<option value="India">India</option>
							<option value="Indonesia">Indonesia</option>
							<option value="Israel">Israel</option>
							<option value="Italy">Italy</option>
							<option value="Japan">Japan</option>
							<option value="Korea">Korea, Republic of</option>
							<option value="Mexico">Mexico</option>
							<option value="Philippines">Philippines</option>
							<option value="Russia">Russian Federation</option>
							<option value="South Africa">South Africa</option>
							<option value="Thailand">Thailand</option>
							<option value="Turkey">Turkey</option>
							<option value="Ukraine">Ukraine</option>
							<option value="United Arab Emirates">United Arab Emirates</option>
							<option value="United Kingdom">United Kingdom</option>
							<option value="United States">United States</option>
						</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 400.8px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-multicol-country-container"><span class="select2-selection__rendered" id="select2-multicol-country-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select value</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
				</div>
			</div>
			<div class="row mb-3 select2-primary">
				<label class="col-sm-3 col-form-label" for="multicol-language">Language</label>
				<div class="col-sm-9">
					<div class="position-relative"><select id="multicol-language" class="select2 form-select select2-hidden-accessible" multiple="" data-select2-id="multicol-language" tabindex="-1" aria-hidden="true">
							<option value="en" selected="" data-select2-id="4">English</option>
							<option value="fr" selected="" data-select2-id="5">French</option>
							<option value="de">German</option>
							<option value="pt">Portuguese</option>
						</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: 400.8px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
									<ul class="select2-selection__rendered">
										<li class="select2-selection__choice" title="English" data-select2-id="6"><span class="select2-selection__choice__remove" role="presentation">×</span>English</li>
										<li class="select2-selection__choice" title="French" data-select2-id="7"><span class="select2-selection__choice__remove" role="presentation">×</span>French</li>
										<li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li>
									</ul>
								</span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label" for="multicol-birthdate">Birth Date</label>
				<div class="col-sm-9">
					<input type="text" id="multicol-birthdate" class="form-control dob-picker flatpickr-input" placeholder="YYYY-MM-DD" readonly="readonly">
				</div>
			</div>
			<div class="row">
				<label class="col-sm-3 col-form-label" for="multicol-phone">Phone No</label>
				<div class="col-sm-9">
					<input type="text" id="multicol-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941">
				</div>
			</div>
			<div class="pt-4">
				<div class="row justify-content-end">
					<div class="col-sm-9">
						<button type="submit" class="btn btn-primary me-sm-2 me-1 waves-effect waves-light">Submit</button>
						<button type="reset" class="btn btn-label-secondary waves-effect">Cancel</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<?= $this->endSection() ?>