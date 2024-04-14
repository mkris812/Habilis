<div class="max-w-5xl bg-white rounded-lg shadow-lg p-8">
    <h2 class="text-2xl font-bold mb-4 text-blue-600">Doctor Table</h2>
    <table class="border-collapse border border-gray-400 w-full">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-400 px-4 py-2">ID</th>
                <th class="border border-gray-400 px-4 py-2">Name</th>
                <th class="border border-gray-400 px-4 py-2">Specialty</th>
                <th class="border border-gray-400 px-4 py-2">Available</th>
                <th class="border border-gray-400 px-4 py-2">Work Time</th>
                <th class="border border-gray-400 px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border border-gray-400 px-4 py-2">1</td>
                <td class="border border-gray-400 px-4 py-2">Dr. John Doe</td>
                <td class="border border-gray-400 px-4 py-2">Cardiologist</td>
                <td class="border border-gray-400 px-4 py-2">Yes</td>
                <td class="border border-gray-400 px-4 py-2">9:00 AM - 5:00 PM</td>
                <td class="border border-gray-400 px-4 py-2">
                    <a href="index.php?page=doctor_edit.php" class="nav-link group bg-blue-600 hover:bg-blue-400 px-5 py-2 font-semibold rounded-lg">Edit</a>
                    <a href="#" class="nav-link group bg-red-600 hover:bg-red-400 px-5 py-2 font-semibold rounded-lg">Delet</a>
                    <a href="index.php?page=doctor_detail.php" class="nav-link group bg-green-600 hover:bg-green-400 px-5 py-2 font-semibold rounded-lg">View</a></td>
              
            </tr>
           
            <!-- Add more rows for other doctors -->
        </tbody>
    </table>
</div>
