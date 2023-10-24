<div class="h-screen bg-white flex flex-col justify-center items-center">
    <div class="bg-white w-96 shadow-xl rounded p-5">
        <h1 class="text-3xl font-medium text-center">Тестовое задание</h1>

        <form method="POST" action="{{ route('save-data') }}" id="myForm" class="space-y-5 mt-5">
            @csrf

            <div class="mb-4">
                <input name="name" type="text" id="name"
                    class="w-full h-12 border border-gray-300 rounded px-3 focus:outline-none focus:ring focus:border-blue-500"
                    placeholder="Имя" />
            </div>

            <div class="mb-4">
                <input name="phone" type="text" id="phone"
                    class="w-full h-12 border border-gray-300 rounded px-3 focus:outline-none focus:ring focus:border-blue-500"
                    placeholder="Телефон" />
            </div>

            <div class="mb-4">
                <input name="email" type="email" id="email"
                    class="w-full h-12 border border-gray-300 rounded px-3 focus:outline-none focus:ring focus:border-blue-500"
                    placeholder="Email" />
            </div>

            <button type="submit"
                class="w-full bg-blue-900 rounded-md text-white py-3 font-medium hover:bg-blue-700 transition duration-300">Отправить</button>
        </form>
    </div>
</div>