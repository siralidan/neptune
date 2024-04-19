<x-app-layout>
    <div class="">
        <div class="bg-image relative isolate px-6 lg:px-8">
            <div class="py-10 sm:py-20 lg:py-28">
                <div class="">
                    <h1 class="text-2xl font-bold text-center items-center tracking-tight text-white sm:text-5xl">
                        Contact Us
                    </h1>
                    <p class="font-bold text-center text-xs">
                        Home <span class="font-bold"> > </span>
                        <span class="text-yellow-600">Contact Us</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center bg-white">
        <div class="container mx-auto my-4 px-4 lg:px-20">
            <div class="w-full py-14 my-4 md:px-12 lg:w-2/3 lg:pl-20 lg:pr-40 mr-auto rounded-2xl shadow-2xl">
                <p class="font-bold">Get In Touch</p>
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-8">
                    <input
                    class="w-full bg-gray-100 text-gray-900 text-xs mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline border border-gray-100"
                    type="text" placeholder="First Name*"
                />
                
                <input
                class="w-full bg-gray-100 text-gray-900 text-xs mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline border border-gray-300"
                type="text" placeholder="Last Name*"
            />
            <input
                class="w-full bg-gray-100 text-gray-900 text-xs mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline border border-gray-300"
                type="email" placeholder="Email*"
            />
            <input
                class="w-full bg-gray-100 text-gray-900 text-xs mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline border border-gray-300"
                type="number" placeholder="Phone*"
            />
            
                </div>
                <div class="my-4">
                    <textarea placeholder="Message*"
                        class="w-full h-32 bg-gray-100 text-gray-900 text-xs mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline border border-gray-300"></textarea>
                </div>
                
                <div class="my-2 w-1/2 lg:w-1/4">
                    <button
                        class="uppercase text-xs font-bold tracking-wide bg-yellow-600 text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline">
                        Send Message
                    </button>
                </div>
            </div>

            <div class="w-full lg:-mt-96 lg:w-1/3 px-8 py-12 h-full ml-auto rounded-2xl">
                <div class="flex flex-col text-gray-800">
                    <h1 class="font-bold text-xl my-4">Drop in our office</h1>
                    <p class="text-xs">
                        We believe in building strong relationships with our clients, and
                        your visit will allow us to better understand your requirements and
                        expectations. Our office is equipped with state-of-the-art
                        facilities to ensure a comfortable and productive meeting. We look
                        forward to welcoming you soon.”
                    </p>

                    <div class="flex">
                        <div class="flex flex-col">
                            <p class="text-xs font-bold mt-4">Main Office</p>
                            <div class="flex items-center">
                                <i class='bx bxs-map text-yellow-600 text-lg'></i>
                                <p class="text-xs ml-4">Victoria, Seychelles</p>
                            </div>
                        </div>
                    </div>
                    

                    <div class="flex">
                        <div class="flex flex-col text-xs">
                            <h2 class="text-xs font-bold">Email Us</h2>
                            <div class="flex items-center">
                                
                                <i class='bx bxs-envelope text-yellow-600 text-lg'></i>
                                <p class="text-xs ml-4">info@neptunecorporate.com</p>
                            </div>
                            <div class="flex items-center">
                                <i class='bx bxs-envelope text-yellow-600 text-lg'></i>
                                <p class="text-xs ml-4">sales@neptunecorporate.com</p>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
<style scoped>
    .bg-image {
        background-image: url("images/hero-3.jpg");
        background-size: cover;
        background-position: center;
    }

    @media (max-width: 767px) {
        .section-with-bg-image {
            background-size: auto;
        }
    }
</style>
