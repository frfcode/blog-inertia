<script setup></script>

<template>
    <div>
        <div
            class="flex flex-col justify-center items-center h-screen bg-teal-500"
        >
            <div
                class="bg-gray-600 p-4 rounded-xl shadow-lg w-1/4 shadow-slate-800"
            >
                <form action="">
                    <div class="flex flex-row flex-wrap">
                        <div class="basis-full my-2">
                            <div class="flex flex-wrap justify-center">
                                <div class="basis-full">
                                    <h3
                                        class="text-white block text-center text-xl border-white pb-2 border-b-2"
                                    >
                                        Blog inertia - Login
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="basis-full my-2">
                            <div class="flex flex-wrap justify-center">
                                <div class="basis-3/5">
                                    <label
                                        class="text-white block text-center pb-2 text-xl"
                                        >Usuario</label
                                    >
                                    <input
                                        type="text"
                                        class="outline-none block w-full py-1 px-2 rounded-md"
                                        placeholder="usuario"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="basis-full my-2">
                            <div class="flex flex-wrap justify-center">
                                <div class="basis-3/5">
                                    <label
                                        class="text-white block text-center pb-2 text-xl"
                                        >Password</label
                                    >
                                    <input
                                        type="password"
                                        class="outline-none block w-full py-1 px-2 rounded-md"
                                        placeholder="password"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "Login",
};
</script>
