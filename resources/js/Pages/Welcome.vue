<template>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-900 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div v-if="false" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <inertia-link v-if="$page.props.user" href="/dashboard" class="text-sm text-gray-700 underline">
                Dashboard
            </inertia-link>
            <template v-else>
                <inertia-link :href="route('login')" class="text-sm text-gray-700 underline">
                    Log in
                </inertia-link>
                <inertia-link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-gray-700 underline">
                    Register
                </inertia-link>
            </template>
        </div>

        <inertia-link href="/PigFrogBlog">
            <svg id="PigFrogBlog" viewBox="5 5 134 34" :style="pointer" @mouseover="setPigFrogShow(true)" @mouseleave="setPigFrogShow(false)">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Artboard" transform="translate(-9.000000, -7.000000)">
                        <g id="Group-2" transform="translate(9.000000, 7.000000)">
                            <g id="Group" transform="translate(4.000000, 3.500000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <!-- 蹼 -->
                                <path class="path" d="M3,3 L3.5,10" id="r" :stroke="color"></path>
                                <path class="path" d="M3,3 L10.5,2.5" id="r" :stroke="color"></path>
                                <path class="path" d="M11,2.5 L10,9.5" id="r" :stroke="color"></path>
                                <path class="path" d="M3.5,9.5 L10,9" id="r" :stroke="color"></path>
                                <path class="path" d="M6.75,9.25 V19" id="r" :stroke="color"></path>
                                <path class="path" d="M6.75,14.525 L10.6,13.5" id="r" :stroke="color"></path>
                                <path class="path" d="M2.7,14.725 L3.5,20" id="r" :stroke="color"></path>
                                <path class="path" d="M1.5,20.5 L11.5,18" id="r" :stroke="color"></path>

                                <path class="path" d="M19,0.9 V6.2" id="r" :stroke="color"></path>
                                <path class="path" d="M23,0.3 V6" id="r" :stroke="color"></path>
                                <path class="path" d="M15.5,3 L16.5,4.5" id="r" :stroke="color"></path>
                                <path class="path" d="M27.2,2.4 L25.8,4.2" id="r" :stroke="color"></path>
                                <path class="path" d="M14,7.8 L28.8,7.1" id="r" :stroke="color"></path>
                                <path class="path" d="M18,7.6 L19.3,11.5" id="r" :stroke="color"></path>
                                <path class="path" d="M24.2,7.4 L22.8,11.5" id="r" :stroke="color"></path>
                                <path class="path" d="M16.5,12 L26.1,11.9" id="r" :stroke="color"></path>
                                <path class="path" d="M18.1,15 L24.4,14.9" id="r" :stroke="color"></path>
                                <path class="path" d="M15,18.2, L28,18" id="r" :stroke="color"></path>
                                <path class="path" d="M21.3,12 C21.1,12 23.5,22 14.2,24" id="r" :stroke="color"></path>
                                <path class="path" d="M24,21 L27,24.5" id="r" :stroke="color"></path>
                            </g>

                            <g id="Group" transform="translate(4.000000, 3.500000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <!-- 蹄 -->
                                <path class="path2" d="M53,3 L53.5,10" id="r" :stroke="color"></path>
                                <path class="path2" d="M53,3 L60.5,2.5" id="r" :stroke="color"></path>
                                <path class="path2" d="M61,2.5 L60,9.5" id="r" :stroke="color"></path>
                                <path class="path2" d="M53.5,9.5 L60,9" id="r" :stroke="color"></path>
                                <path class="path2" d="M56.75,9.25 V19" id="r" :stroke="color"></path>
                                <path class="path2" d="M56.75,14.525 L60.6,13.5" id="r" :stroke="color"></path>
                                <path class="path2" d="M52.7,14.725 L53.5,20" id="r" :stroke="color"></path>
                                <path class="path2" d="M51.5,20.5 L61.5,18" id="r" :stroke="color"></path>

                                <path class="path2" d="M71.5,1.5 L72.2,2.7" id="r" :stroke="color"></path>
                                <path class="path2" d="M67,4 L77.8,3.4" id="r" :stroke="color"></path>
                                <path class="path2" d="M69,3.9 L70.5,8" id="r" :stroke="color"></path>
                                <path class="path2" d="M75.5,3.8 L74,8" id="r" :stroke="color"></path>
                                <path class="path2" d="M65.1,8 L64.8,11.5" id="r" :stroke="color"></path>
                                <path class="path2" d="M65.8,9.2 L80,8.7" id="r" :stroke="color"></path>
                                <path class="path2" d="M80.1,8.8 L79.9,11.1" id="r" :stroke="color"></path>
                                <path class="path2" d="M67.5,14 V19" id="r" :stroke="color"></path>
                                <path class="path2" d="M68.5,14 L77.5,13.75" id="r" :stroke="color"></path>
                                <path class="path2" d="M77.6,13.75 L77.4,19.5" id="r" :stroke="color"></path>
                                <path class="path2" d="M77.1,19.4, L75.3,18.2" id="r" :stroke="color"></path>
                                <path class="path2" d="M72.2,10.2, V24" id="r" :stroke="color"></path>
                            </g>
                            <g id="Group" transform="translate(4.000000, 3.500000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <!-- 記 -->
                                <path class="path3" d="M104,1.5 L105,2.8" id="r" :stroke="color"></path>
                                <path class="path3" d="M99,4 L110,3.7" id="r" :stroke="color"></path>
                                <path class="path3" d="M101,8.5 L108,8.3" id="r" :stroke="color"></path>
                                <path class="path3" d="M101,12.5 L108,12.3" id="r" :stroke="color"></path>
                                <path class="path3" d="M100.2,16.8 L100.4,22" id="r" :stroke="color"></path>
                                <path class="path3" d="M100.2,16.8 L109,16.5" id="r" :stroke="color"></path>
                                <path class="path3" d="M109.2,16.5 L108.9,21.8" id="r" :stroke="color"></path>
                                <path class="path3" d="M100.4,22 L108.8,21.8" id="r" :stroke="color"></path>

                                <path class="path3" d="M117,3.4 L126,3.1" id="r" :stroke="color"></path>
                                <path class="path3" d="M126,3.1 L125.7,10.3" id="r" :stroke="color"></path>
                                <path class="path3" d="M116.5,11.5 L126.3,11.3" id="r" :stroke="color"></path>
                                <path class="path3" d="M116.5,11.5 V21" id="r" :stroke="color"></path>
                                <path class="path3" d="M116.5,21 C116.5,22.5 117,22.8 128,22.5" id="r" :stroke="color"></path>
                                <path class="path3" d="M128,22 L127.8,19" id="r" :stroke="color"></path>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
        </inertia-link>

        <div v-if="hasLoading">
            <div id="PigPig" class="text-6xl text-pink-400" v-if="isShow">
                <i>豬豬~</i>
            </div>
            <div id="FrogFrog" class="text-6xl text-green-400" v-if="isShow">
                <i>呱呱~</i>
            </div>
        </div>
    </div>
</template>

<style scoped>

    #PigPig {
        position: absolute;
        top: 20%;
        left: 20%;
    }

    #FrogFrog {
        position: absolute;
        top: 70%;
        left: 70%;
    }

    #PigFrogBlog {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 940px;
        height: 340px;
        transform: translate(-50%, -50%);
    }

    .path, .path2, .path3 {
        stroke-dashoffset: 0;
        stroke-dasharray: 100%;
        animation: dash 10.5s linear;
    }

    .path:nth-child(1), .path2:nth-child(1), .path3:nth-child(1) {
        animation-delay: -4s;
    }
    .path:nth-child(2), .path2:nth-child(2), .path3:nth-child(2) {
        animation-delay: -3.8s;
    }
    .path:nth-child(3), .path2:nth-child(3), .path3:nth-child(3) {
        animation-delay: -3.6s;
    }
    .path:nth-child(4), .path2:nth-child(4), .path3:nth-child(4) {
        animation-delay: -3.4s;
    }
    .path:nth-child(5), .path2:nth-child(5), .path3:nth-child(5) {
        animation-delay: -3.2s;
    }
    .path:nth-child(6), .path2:nth-child(6), .path3:nth-child(6) {
        animation-delay: -3s;
    }
    .path:nth-child(7), .path2:nth-child(7), .path3:nth-child(7) {
        animation-delay: -2.8s;
    }
    .path:nth-child(8), .path2:nth-child(8), .path3:nth-child(8) {
        animation-delay: -2.6s;
    }
    .path:nth-child(9), .path2:nth-child(9), .path3:nth-child(9) {
        animation-delay: -2.4s;
    }
    .path:nth-child(10), .path2:nth-child(10) {
        animation-delay: -2.2s;
    }
    .path:nth-child(11), .path2:nth-child(11), .path3:nth-child(10) {
        animation-delay: -2s;
    }
    .path:nth-child(12), .path2:nth-child(12) {
        animation-delay: -1.8s;
    }
    .path:nth-child(13), .path2:nth-child(13), .path3:nth-child(11) {
        animation-delay: -1.6s;
    }
    .path:nth-child(14), .path2:nth-child(14) {
        animation-delay: -1.4s;
    }
    .path:nth-child(15), .path2:nth-child(15), .path3:nth-child(12) {
        animation-delay: -1.2s;
    }
    .path:nth-child(16), .path2:nth-child(16) {
        animation-delay: -1s;
    }
    .path:nth-child(17), .path2:nth-child(17), .path3:nth-child(13) {
        animation-delay: -0.8s;
    }
    .path:nth-child(18), .path2:nth-child(18) {
        animation-delay: -0.6s;
    }
    .path:nth-child(19), .path2:nth-child(19) {
        animation-delay: -0.6s;
    }
    .path2:nth-child(20) {
        animation-delay: -0.3s;
    }




    @keyframes dash {
        0%, 50% {
            stroke-dashoffset: 100%;
        }
        to {
            stroke-dashoffset: 0%;
        }
    }

    .bg-gray-100 {
        background-color: #f7fafc;
        background-color: rgba(247, 250, 252, var(--tw-bg-opacity));
    }

    .border-gray-200 {
        border-color: #edf2f7;
        border-color: rgba(237, 242, 247, var(--tw-border-opacity));
    }

    .text-gray-400 {
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--tw-text-opacity));
    }

    .text-gray-500 {
        color: #a0aec0;
        color: rgba(160, 174, 192, var(--tw-text-opacity));
    }

    .text-gray-600 {
        color: #718096;
        color: rgba(113, 128, 150, var(--tw-text-opacity));
    }

    .text-gray-700 {
        color: #4a5568;
        color: rgba(74, 85, 104, var(--tw-text-opacity));
    }

    .text-gray-900 {
        color: #1a202c;
        color: rgba(26, 32, 44, var(--tw-text-opacity));
    }

    @media (prefers-color-scheme: dark) {
        .dark\:bg-gray-800 {
            background-color: #2d3748;
            background-color: rgba(45, 55, 72, var(--tw-bg-opacity));
        }

        .dark\:bg-gray-900 {
            background-color: #1a202c;
            background-color: rgba(26, 32, 44, var(--tw-bg-opacity));
        }

        .dark\:border-gray-700 {
            border-color: #4a5568;
            border-color: rgba(74, 85, 104, var(--tw-border-opacity));
        }

        .dark\:text-white {
            color: #fff;
            color: rgba(255, 255, 255, var(--tw-text-opacity));
        }

        .dark\:text-gray-400 {
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--tw-text-opacity));
        }
    }
</style>

<script>
    export default {
        props: {
            canLogin: Boolean,
            canRegister: Boolean,
            laravelVersion: String,
            phpVersion: String,
        },

        data: function() {
            return {
                pointer: '',
                color: '#D1D5DB',
                isShow: false,
                hasLoading: false
            }
        },
        methods: {
            setPigFrogShow(isShow) {
                this.isShow = isShow;
            },
            setTimeoutFun() {
                setTimeout(() => {
                    this.hasLoading = true
                }, 1000 * 6);
            },
            login() {
                // axios.post('login', {email: 'LG@gmail.com', password: 'Ss860228', remember: ''});
            }
        },
        created() {
            this.login();
            this.setTimeoutFun();
        }
    }
</script>
