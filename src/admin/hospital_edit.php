<div class="max-w-4xl  bg-white rounded-lg shadow-lg p-8">
    <h2 class="text-2xl font-bold mb-4 text-blue-600">Edit Hospital Details</h2>
    <form action="/update-hospital" method="POST">
        <div class="grid grid-cols-2 gap-4">
            <div class="mb-4">
                <label for="hospital_id" class="text-gray-700 font-semibold">Hospital ID:</label>
                <input type="text" id="hospital_id" name="hospital_id" value="123456" class="text-gray-900 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-400 block w-full">
            </div>
            <div class="mb-4">
                <label for="email" class="text-gray-700 font-semibold">Email:</label>
                <input type="email" id="email" name="email" value="hospital@example.com" class="text-gray-900 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-400 block w-full">
            </div>
            <div class="mb-4">
                <label for="contact" class="text-gray-700 font-semibold">Contact:</label>
                <input type="text" id="contact" name="contact" value="+1 234 567 890" class="text-gray-900 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-400 block w-full">
            </div>
            <div class="mb-4">
                <label for="location" class="text-gray-700 font-semibold">Location:</label>
                <input type="text" id="location" name="location" value="123 Street, City, Country" class="text-gray-900 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-400 block w-full">
            </div>
            <div class="mb-4">
                <label for="open_time" class="text-gray-700 font-semibold">Open Time:</label>
                <input type="text" id="open_time" name="open_time" value="8:00 AM - 5:00 PM" class="text-gray-900 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-400 block w-full">
            </div>
            <div class="mb-4">
                <label for="total_doctors" class="text-gray-700 font-semibold">Total Doctors:</label>
                <input type="number" id="total_doctors" name="total_doctors" value="20" class="text-gray-900 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-400 block w-full">
            </div>
            <div class="mb-4">
                <label for="total_beds" class="text-gray-700 font-semibold">Total Beds:</label>
                <input type="number" id="total_beds" name="total_beds" value="100" class="text-gray-900 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-400 block w-full">
            </div>
            <div class="mb-4">
                <label for="password" class="text-gray-700 font-semibold">Password:</label>
                <input type="password" id="password" name="password" class="text-gray-900 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-400 block w-full">
            </div>
        </div>
        <button type="submit" class="mb-4 group bg-blue-600 hover:bg-blue-400 px-5 py-2 font-semibold rounded-lg">Save Changes</button>
    </form>
</div>

