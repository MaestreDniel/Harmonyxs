<template>
    <FrontLayout title="Configuración de perfil">

        <div class="container my-5">
            <div v-if="$page.props.jetstream.canUpdateProfileInformation">
                <update-profile-information-form :user="$page.props.user" />

                <jet-section-border />
            </div>

            <div v-if="$page.props.jetstream.canUpdatePassword">
                <update-password-form />

                <jet-section-border />
            </div>

            <div v-if="$page.props.jetstream.canManageTwoFactorAuthentication">
                <two-factor-authentication-form />

                <jet-section-border />
            </div>

            <logout-other-browser-sessions-form :sessions="sessions" />

            <template v-if="$page.props.jetstream.hasAccountDeletionFeatures">
                <jet-section-border />

                <delete-user-form />
            </template>
        </div>
    
    </FrontLayout>
</template>

<script>
import { defineComponent } from 'vue'
// import AppLayout from '@/Layouts/AppLayout.vue'
import DeleteUserForm from '@/Pages/Profile/Partials/DeleteUserForm.vue'
import JetSectionBorder from '@/Jetstream/SectionBorder.vue'
import LogoutOtherBrowserSessionsForm from '@/Pages/Profile/Partials/LogoutOtherBrowserSessionsForm.vue'
import TwoFactorAuthenticationForm from '@/Pages/Profile/Partials/TwoFactorAuthenticationForm.vue'
import UpdatePasswordForm from '@/Pages/Profile/Partials/UpdatePasswordForm.vue'
import UpdateProfileInformationForm from '@/Pages/Profile/Partials/UpdateProfileInformationForm.vue'
import FrontLayout from "@/Layouts/FrontLayout";

export default defineComponent({
    props: ['sessions'],

    components: {
        // AppLayout,
        FrontLayout,
        DeleteUserForm,
        JetSectionBorder,
        LogoutOtherBrowserSessionsForm,
        TwoFactorAuthenticationForm,
        UpdatePasswordForm,
        UpdateProfileInformationForm,
    },
})
</script>
