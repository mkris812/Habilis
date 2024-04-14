<div class="max-w-4xl bg-white rounded-lg shadow-lg p-8">
    <h2 class="text-2xl font-bold mb-4 text-blue-600">Add Doctor</h2>
    <form action="/add-doctor" method="POST">
        <div class="grid grid-cols-2 gap-4">
            <div class="mb-4">
                <label for="name" class="text-gray-700 font-semibold">Name:</label>
                <input type="text" id="name" name="name" class="text-gray-900 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-400 block w-full">
            </div>
            <div class="mb-4">
                <label for="email" class="text-gray-700 font-semibold">Email:</label>
                <input type="email" id="email" name="email" class="text-gray-900 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-400 block w-full">
            </div>
            <div class="mb-4">
                <label for="contact" class="text-gray-700 font-semibold">Contact:</label>
                <input type="text" id="contact" name="contact" class="text-gray-900 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-400 block w-full">
            </div>
            <div class="mb-4">
                <label for="specialty" class="text-gray-700 font-semibold">Specialty:</label>
                <input type="text" id="specialty" name="specialty" class="text-gray-900 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-400 block w-full">
            </div>
            <div class="mb-4">
                <label for="availability" class="text-gray-700 font-semibold">Availability:</label>
                <select id="availability" name="availability" class="text-gray-900 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-400 block w-full">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="work_time" class="text-gray-700 font-semibold">Work Time:</label>
                <input type="text" id="work_time" name="work_time" class="text-gray-900 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-400 block w-full">
            </div>
        </div>
        <button type="submit" class="mb-4 group bg-blue-600 hover:bg-blue-400 px-5 py-2 font-semibold rounded-lg">Add Doctor</button>
    </form>
</div>
