<template>
				<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">

				<div class="row w-100 mx-0 auth-page">
					<div class="col-md-8 col-xl-6 mx-auto">
						<div class="card">
							<div class="row">
                <div class="col-md-4 pr-md-0">
                  <div class="auth-left-wrapper" style="background-image: url('/assets/images/team-work.jpg')">
                  </div>
                </div>
                <div class="col-md-8 pl-md-0">
                  <div class="auth-form-wrapper px-4 py-5">
                    <a href="#" class="noble-ui-logo d-block mb-2">Unicorns.<span>uz</span></a>
                    <h5 class="text-muted font-weight-normal mb-4">Tizimga kirish</h5>
                    <form class="forms-sample" @submit.prevent="submitHandler">
                      <div class="form-group" :class="{'has-danger': !$v.form.email.email}">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" v-model="form.email" required>
                        <label id="email-invalid" class="error mt-2 text-danger" for="email" v-if="!$v.form.email.email">
                          Email kiriting!
                        </label>
                      </div>
                      <div class="form-group" :class="{'has-danger': !$v.form.password.minLength}">
                        <label for="password">Parol</label>
                        <input type="password" class="form-control" id="password" autocomplete="current-password" placeholder="Parol" v-model="form.password" required>
                        <label id="password-invalid" class="error mt-2 text-danger" for="password" v-if="!$v.form.password.minLength">
                          Parol soni 6 ta simvoldan kam bo'lmasligi shart !
                        </label>
                      </div>
                      <div class="mt-3">
                        <button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0 text-white">
                          <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true" v-if="isLoading"></span>
                          Kirish
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
						</div>
					</div>
				</div>

			</div>
		</div>
</template>

<script>

import { required, minLength, email } from 'vuelidate/lib/validators'

export default {

  data: () => ({
    isLoading: false,
    form: {
      email: '',
      password: ''
    },
    errors: {}
  }),
  validations: {
    form: {
      email: { required, email },
      password: { required, minLength: minLength(6) }
    }
  },
  methods: {
    async submitHandler () {
      this.isLoading = true

      this.$store.dispatch('login', {
          body: this.form, // VueResource
          data: this.form, // Axios
          remember: true,
          fetchUser: true,
          staySignedIn: false,
      })
      .then(null, (res) => {
          this.errors(
              res.response || // Axios
              res             // VueResource
          );
      });
      this.isLoading = false
    }
  }
};
</script>