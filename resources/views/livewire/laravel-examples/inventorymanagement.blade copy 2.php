<div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
        <div
            class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <h6 class="font-bold text-xl text-slate-800">Manage Inventory</h6>
                <p class="text-slate-600">Here you can manage your inventory.</p>
            </div>

            <div class="flex justify-between mb-4">
                <div class="flex items-center">
                    <span class="mr-2 text-sm font-medium text-slate-700">Entries per page:</span>
                    <select id="entries-per-page"
                        class="border border-gray-300 rounded-md px-2 py-1 focus:outline-none focus:ring-1 focus:ring-indigo-500">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
                <div class="flex items-center justify-end">
                    <span class="mr-2 font-medium text-slate-700">Search:</span>
                    <input type="text" id="search-input"
                        class="w-full px-2 py-1 rounded-md border border-gray-300 shadow-sm focus:outline-none focus:ring-1 focus:ring-indigo-500">
                </div>
            </div>

            <div class="overflow-x-auto">
                <table id="inventory-table" class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                    <thead>
                        <tr>
                            <th
                                class="px-6 py-3 font-bold text-left uppercase bg-transparent border-b border-gray-200 shadow-none text-xs tracking-wide whitespace-nowrap text-slate-400">
                                Type
                            </th>
                            <th
                                class="px-6 py-3 font-bold text-left uppercase bg-transparent border-b border-gray-200 shadow-none text-xs tracking-wide whitespace-nowrap text-slate-400">
                                Brand
                            </th>
                            <th
                                class="px-6 py-3 font-bold text-left uppercase bg-transparent border-b border-gray-200 shadow-none text-xs tracking-wide whitespace-nowrap text-slate-400">
                                Accountable Personnel
                            </th>
                            <th
                                class="px-6 py-3 pl-2 font-bold text-left uppercase bg-transparent border-b border-gray-200 shadow-none text-xs tracking-wide whitespace-nowrap text-slate-400">
                                Division
                            </th>
                            <th
                                class="px-6 py-3 pl-2 font-bold text-left uppercase bg-transparent border-b border-gray-200 shadow-none text-xs tracking-wide whitespace-nowrap text-slate-400">
                                Province
                            </th>
                            <th
                                class="px-6 py-3 font-bold text-center uppercase bg-transparent border-b border-gray-200 shadow-none text-xs tracking-wide whitespace-nowrap text-slate-400">
                                Operating Unit
                            </th>
                            <th
                                class="px-6 py-3 font-bold text-center uppercase bg-transparent border-b border-gray-200 shadow-none text-xs tracking-wide whitespace-nowrap text-slate-400">
                                Acquisition Date
                            </th>
                            <th
                                class="px-6 py-3 font-bold text-center uppercase bg-transparent border-b border-gray-200 shadow-none text-xs tracking-wide whitespace-nowrap text-slate-400">
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($inventories as $inventory)
                            <tr>
                                <td class="pl-6 align-middle border-b whitespace-nowrap">
                                    <p class="font-semibold text-xs text-slate-800">
                                        {{ $inventory->typeRelation->name }}
                                    </p>
                                </td>
                                <td class="pl-6 align-middle border-b whitespace-nowrap">
                                    <p class="font-semibold text-xs text-slate-800">
                                        {{ $inventory->brand }}
                                    </p>
                                </td>
                                <td class="pl-6 align-middle border-b whitespace-nowrap">
                                    <p class="font-semibold text-xs text-slate-800">
                                        {{ $inventory->accountablePersonnelRelation->name }}
                                    </p>
                                </td>
                                <td class="p-2 align-middle border-b whitespace-nowrap">
                                    <p class="font-semibold text-xs text-slate-800">
                                        {{ $inventory->divisionRelation->name }}
                                    </p>
                                </td>
                                <td class="p-2 text-center align-middle border-b whitespace-nowrap">
                                    <p class="font-semibold text-xs text-slate-800">
                                        {{ $inventory->provinceRelation->name }}
                                    </p>
                                </td>
                                <td class="p-2 text-center align-middle border-b whitespace-nowrap">
                                    <p class="font-semibold text-xs text-slate-800">
                                        {{ $inventory->operatingUnitRelation->name }}
                                    </p>
                                </td>
                                <td class="p-2 text-center align-middle border-b whitespace-nowrap">
                                    <p class="font-semibold text-xs text-slate-800">
                                        {{ $inventory->acquisition_date }}
                                    </p>
                                </td>
                                <td class="p-2 text-center align-middle border-b whitespace-nowrap">
                                    <p class="font-semibold text-xs text-slate-800">
                                        {{ $inventory->statusRelation->name }}
                                    </p>
                                </td>
                                <td class="p-2 text-center align-middle border-b whitespace-nowrap">
                                    <div class="flex justify-center space-x-2">
                                        <form action="{{ route('inventory.delete', $inventory->id) }}" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this inventory {{ $inventory->id }} ')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900"
                                                title="Delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="flex items-center justify-between mb-4">
                    <span class="text-sm text-slate-500">
                        Showing <span id="entries-to">1 to 10</span> of <span id="total-entries">{{ $totalEntries }}</span>
                        entries
                    </span>
                    <div class="pagination">
                        <button id="prev-page" class="px-2 py-1 mx-1 border border-gray-300 rounded-md" disabled>‹ Previous</button>
                        <span id="page-numbers" class="text-sm font-medium text-slate-700">1</span>
                        <button id="next-page" class="px-2 py-1 mx-1 border border-gray-300 rounded-md">Next ›</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const searchInput = document.getElementById('search-input');
    const tableBody = document.getElementById('inventory-table').getElementsByTagName('tbody')[0];
    const entriesToSpan = document.getElementById('entries-to');
    const totalEntriesSpan = document.getElementById('total-entries');
    const entriesPerPageSelect = document.getElementById('entries-per-page');
    const prevPageButton = document.getElementById('prev-page');
    const nextPageButton = document.getElementById('next-page');
    const pageNumbersSpan = document.getElementById('page-numbers');

    let entriesPerPage = parseInt(entriesPerPageSelect.value);
    let currentPage = 1;

    function updateEntriesToShow() {
        const rows = tableBody.getElementsByTagName('tr');
        const totalEntries = rows.length;
        const searchTerm = searchInput.value.toLowerCase();

        let visibleRows = [];
        for (let row of rows) {
            row.style.display = 'none';
            const cells = row.getElementsByTagName('td');
            for (let cell of cells) {
                if (cell.textContent.toLowerCase().includes(searchTerm)) {
                    visibleRows.push(row);
                    break;
                }
            }
        }

        const startIndex = (currentPage - 1) * entriesPerPage;
        const endIndex = Math.min(startIndex + entriesPerPage, visibleRows.length);

        for (let i = startIndex; i < endIndex; i++) {
            visibleRows[i].style.display = '';
        }

        entriesToSpan.textContent = `${startIndex + 1} to ${endIndex}`;
        totalEntriesSpan.textContent = visibleRows.length;

        prevPageButton.disabled = currentPage === 1;
        nextPageButton.disabled = endIndex >= visibleRows.length;

        const totalPages = Math.ceil(visibleRows.length / entriesPerPage);
        pageNumbersSpan.textContent = `${currentPage}`;
    }

    updateEntriesToShow();

    entriesPerPageSelect.addEventListener('change', function () {
        entriesPerPage = parseInt(entriesPerPageSelect.value);
        currentPage = 1;
        updateEntriesToShow();
    });

    searchInput.addEventListener('input', function () {
        currentPage = 1;
        updateEntriesToShow();
    });

    prevPageButton.addEventListener('click', function () {
        if (currentPage > 1) {
            currentPage--;
            updateEntriesToShow();
        }
    });

    nextPageButton.addEventListener('click', function () {
        const rows = tableBody.getElementsByTagName('tr');
        const searchTerm = searchInput.value.toLowerCase();

        let visibleRows = [];
        for (let row of rows) {
            const cells = row.getElementsByTagName('td');
            for (let cell of cells) {
                if (cell.textContent.toLowerCase().includes(searchTerm)) {
                    visibleRows.push(row);
                    break;
                }
            }
        }

        const totalPages = Math.ceil(visibleRows.length / entriesPerPage);
        if (currentPage < totalPages) {
            currentPage++;
            updateEntriesToShow();
        }
    });
</script>
