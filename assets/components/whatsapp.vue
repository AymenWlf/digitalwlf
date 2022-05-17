<template>
  <!-- ======= WhatsApp Chat ======= -->
  <div class="layout">
    <!-- ommited -->
    <SocialChat icon :attendants="attendants">
      <template #header>
        <p>
          Choisissez un de nos préposés pour entamer une discussion sur WhatsApp
        </p>
      </template>
      <template #button>
        <img
          src="https://raw.githubusercontent.com/ktquez/vue-social-chat/master/src/icons/whatsapp.svg"
          alt="icon whatsapp"
          aria-hidden="true"
        />
      </template>
      <template #footer>
        <small>Nous sommes disponible 24h/7j sur WhatsApp</small>
      </template>
    </SocialChat>
  </div>
  <!-- End WhatsApp Chat -->
</template>

<script>
import { SocialChat } from "vue-social-chat";
export default {
  name: "WhatsApp",
  components: {
    SocialChat,
  },
  setup() {
    const photoAymen = "https://i.imgur.com/RaEMLVZ.png";
    const label = "Developpeur";
    const attendants = [
      {
        app: "whatsapp",
        label: label,
        name: "Aymen Ouallaf",
        number: "212 61-4369090",
        avatar: {
          src: photoAymen,
          alt: "Aymen",
        },
      },
    ];
    return { attendants };
  },
};
</script>

<style>
body {
  --vsc-bg-header: #46c056;
  --vsc-bg-button: #46c056;
  --vsc-outline-color: #46c056;
  --vsc-border-color-bottom-header: #289d37;
}
</style>
