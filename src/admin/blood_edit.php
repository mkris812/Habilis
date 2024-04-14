<div class="max-w-4xl bg-white rounded-lg shadow-lg p-8">
    <h2 class="text-2xl font-bold mb-4 text-blue-600">Edit Blood Availability</h2>
    <form action="/update-blood" method="POST">
        <div class="grid grid-cols-2 gap-4">
            <div class="mb-4">
                <label for="blood_type" class="text-gray-700 font-semibold">Blood Type:</label>
                <input type="text" id="blood_type" name="blood_type" value="AB-" class="text-gray-900 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-400 block w-full">
            </div>
            <div class="mb-4">
                <label for="liters_available" class="text-gray-700 font-semibold">Liters Available:</label>
                <input type="text" id="liters_available" name="liters_available" value="-" class="text-gray-900 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-400 block w-full">
            </div>
            <div class="mb-4">
                <label for="available" class="text-gray-700 font-semibold">Available:</label>
                <input type="text" id="available" name="available" value="-" class="text-gray-900 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-400 block w-full">
            </div>
            <div class="mb-4">
                <label for="donor_available" class="text-gray-700 font-semibold">Donor Available:</label>
                <input type="text" id="donor_available" name="donor_available" value="-" class="text-gray-900 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-400 block w-full">
            </div>
            <div class="mb-4"></div> <!-- Empty div for alignment -->
        </div>
        <button type="submit" class="mb-4 group bg-blue-600 hover:bg-blue-400 px-5 py-2 font-semibold rounded-lg">Save Changes</button>
    </form>
</div>
