<div class="max-w-4xl bg-white rounded-lg shadow-lg p-8">
    <h2 class="text-2xl font-bold mb-4 text-blue-600">Edit Doctor Details</h2>
    <form action="/update-doctor" method="POST">
        <div class="grid grid-cols-2 gap-4">
            <div class="mb-4">
                <label for="doctor_id" class="text-gray-700 font-semibold">Doctor ID:</label>
                <input type="text" id="doctor_id" name="doctor_id" value="1" class="text-gray-900 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-400 block w-full">
            </div>
            <div class="mb-4">
                <label for="name" class="text-gray-700 font-semibold">Name:</label>
                <input type="text" id="name" name="name" value="Dr. John Doe" class="text-gray-900 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-400 block w-full">
            </div>
            <div class="mb-4">
                <label for="email" class="text-gray-700 font-semibold">Email:</label>
                <input type="email" id="email" name="email" value="john.doe@example.com" class="text-gray-900 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-400 block w-full">
            </div>
            <div class="mb-4">
                <label for="contact" class="text-gray-700 font-semibold">Contact:</label>
                <input type="text" id="contact" name="contact" value="+1234567890" class="text-gray-900 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-400 block w-full">
            </div>
            <div class="mb-4">
                <label for="specialty" class="text-gray-700 font-semibold">Specialty:</label>
                <input type="text" id="specialty" name="specialty" value="Cardiologist" class="text-gray-900 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-400 block w-full">
            </div>
            <div class="mb-4">
                <label for="available" class="text-gray-700 font-semibold">Available:</label>
                <select id="available" name="available" class="text-gray-900 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-400 block w-full">
                    <option value="Yes" selected>Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="work_time" class="text-gray-700 font-semibold">Work Time:</label>
                <input type="text" id="work_time" name="work_time" value="9:00 AM - 5:00 PM" class="text-gray-900 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-400 block w-full">
            </div>
         
        </div>
        <button type="submit" class="mb-4 group bg-blue-600 hover:bg-blue-400 px-5 py-2 font-semibold rounded-lg">Save Changes</button>
    </form>
</div>
