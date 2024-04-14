<div class="max-w-6xl bg-white rounded-lg shadow-lg p-8">
    <h2 class="text-2xl font-bold mb-4 text-blue-600">Hospital Details</h2>
    <table class="border-collapse border border-gray-400 w-full">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-400 px-4 py-2">ID</th>
                <th class="border border-gray-400 px-4 py-2">Email</th>
                <th class="border border-gray-400 px-4 py-2">Contact</th>
                <th class="border border-gray-400 px-4 py-2">Location</th>
                <th class="border border-gray-400 px-4 py-2">Open Time</th>
                <th class="border border-gray-400 px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Populate the table with hospital data dynamically -->
            <tr>
                <td class="border border-gray-400 px-4 py-2">1</td>
                <td class="border border-gray-400 px-4 py-2">hospital@example.com</td>
                <td class="border border-gray-400 px-4 py-2">+1 234 567 890</td>
                <td class="border border-gray-400 px-4 py-2">123 Street, City, Country</td>
                <td class="border border-gray-400 px-4 py-2">8:00 AM - 5:00 PM</td>
                <td class="border border-gray-400 px-4 py-2">
                    <a href="index.php?page=hospital_edit.php" class="nav-link group bg-blue-600 hover:bg-blue-400 px-5 py-2 font-semibold rounded-lg">Edit</a>
                    <a href="#" class="nav-link group bg-red-600 hover:bg-red-400 px-5 py-2 font-semibold rounded-lg">Delet</a>
                    <a href="index.php?page=hospital_detail.php" class="nav-link group bg-green-600 hover:bg-green-400 px-5 py-2 font-semibold rounded-lg">View</a></td>
            </tr>
            <!-- Add more rows for other hospitals -->
        </tbody>
    </table>
</div>
