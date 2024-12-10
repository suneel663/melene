<?php 

/*
Template Name: Contact
*/
get_header(); ?>

<main>
<div class="pb-base">
      <div class="p-base bg-primary text-center">
        <p class="text-base font-medium uppercase">contact</p>
        <p class="text-big font-semibold">
          Let&apos;s get
          <br />
          <span class="heading-span text-faded"> Connected </span> now
        </p>
      </div>
      <div class="grid grid-cols-3 gap-wide p-base contact-container">
        <div class="col-span-2 grid gap-10 contact-form">
          <div class="grid grid-cols-2 gap-8">
            <input
              type="text"
              placeholder="First Name"
              class="input-field col-span-1"
            />
            <input
              type="text"
              placeholder="Last Name"
              class="input-field col-span-1"
            />
          </div>
          <input type="text" placeholder="Email" class="input-field" />
          <input type="text" placeholder="Phone Number" class="input-field" />
          <textarea placeholder="Message..." class="input-field"></textarea>

          <label class="captcha-container" for="captcha">
            <span class="captcha-label">
              <input type="checkbox" id="captcha" name="captcha" />
              <span> I&apos;m not a robot</span>
            </span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/recaptcha-icon.png" alt="" />
          </label>

          <button class="send-button">Send</button>
        </div>

        <div class="col-span-1">
          <p class="heading">Feel free to reach out for your next project.</p>
          <p class="description">
            Just one click away to help you take your brand or product from
            great to incredible.
          </p>

          <div class="contact-info">
            <svg
              width="64"
              height="64"
              viewBox="0 0 64 64"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <rect width="64" height="64" fill="#F3F3F3" />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M21.5998 22.9333L31.6798 30.4933C31.7722 30.5626 31.8844 30.6 31.9998 30.6C32.1152 30.6 32.2275 30.5626 32.3198 30.4933L42.3998 22.9333H21.5998ZM43.7332 23.9333L33.2798 31.7733C32.9106 32.0503 32.4614 32.2 31.9998 32.2C31.5382 32.2 31.0891 32.0503 30.7198 31.7733L20.2665 23.9333V41.0666H43.7332V23.9333ZM19.9998 21.3333H43.9998C44.3535 21.3333 44.6926 21.4738 44.9426 21.7238C45.1927 21.9739 45.3332 22.313 45.3332 22.6666V41.3333C45.3332 41.6869 45.1927 42.0261 44.9426 42.2761C44.6926 42.5262 44.3535 42.6666 43.9998 42.6666H19.9998C19.6462 42.6666 19.3071 42.5262 19.057 42.2761C18.807 42.0261 18.6665 41.6869 18.6665 41.3333V22.6666C18.6665 22.313 18.807 21.9739 19.057 21.7238C19.3071 21.4738 19.6462 21.3333 19.9998 21.3333Z"
                fill="#0F0F0F"
              />
            </svg>

            <div>
              <p class="title">email</p>
              <p class="contact">support@mel.com</p>
            </div>
          </div>

          <div class="contact-info">
            <svg
              width="64"
              height="64"
              viewBox="0 0 64 64"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <rect width="64" height="64" fill="#F3F3F3" />
              <path
                d="M32.7469 43.76C32.5293 43.9163 32.2681 44.0003 32.0002 44.0003C31.7323 44.0003 31.4711 43.9163 31.2535 43.76C24.8149 39.1707 17.9815 29.7307 24.8895 22.9093C26.786 21.0438 29.34 19.9988 32.0002 20C34.6669 20 37.2255 21.0467 39.1109 22.908C46.0189 29.7293 39.1855 39.168 32.7469 43.76Z"
                stroke="#0F0F0F"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M32.0002 32C32.7074 32 33.3857 31.7191 33.8858 31.219C34.3859 30.7189 34.6668 30.0406 34.6668 29.3334C34.6668 28.6261 34.3859 27.9478 33.8858 27.4477C33.3857 26.9476 32.7074 26.6667 32.0002 26.6667C31.2929 26.6667 30.6146 26.9476 30.1145 27.4477C29.6144 27.9478 29.3335 28.6261 29.3335 29.3334C29.3335 30.0406 29.6144 30.7189 30.1145 31.219C30.6146 31.7191 31.2929 32 32.0002 32Z"
                stroke="#0F0F0F"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>

            <div>
              <p class="title">Location</p>
              <p class="contact">Silverstone Dr, Coventry</p>
            </div>
          </div>
        </div>
      </div>
    </div>




</main>


<?php get_footer(); ?>