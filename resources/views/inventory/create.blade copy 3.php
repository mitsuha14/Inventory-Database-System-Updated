<div>
    <div class="w-full px-6 mx-auto">
        <div class="relative flex items-center p-0 mt-6 overflow-hidden bg-center bg-cover min-h-75 rounded-2xl"
            style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%">
            <span class="absolute inset-y-0 w-full h-full bg-center bg-cover bg-gradient-fuchsia opacity-60"></span>
        </div>
        <div
            class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 -mt-16 overflow-hidden break-words border-0 shadow-blur rounded-2xl bg-white/80 bg-clip-border backdrop-blur-2xl backdrop-saturate-200">
            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-auto max-w-full px-3">
                    <div
                        class="text-size-base ease-soft-in-out h-18.5 w-18.5 relative inline-flex items-center justify-center rounded-xl text-white transition-all duration-200">
                        <img src="../assets/img/logos/DILG_logo.png" alt="profile_image"
                            class="w-full shadow-soft-sm rounded-xl" />
                    </div>
                </div>
                <div class="flex-none w-auto max-w-full px-3 my-auto">
                    <div class="h-full">
                        {{-- <h5 class="mb-1">{{ $user->name }}</h5> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full px-3 mb-6 e">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <h3 class="font-bold py-3">Adding Inventory</h3>
                    <h5 class="font-bold py-3">Personnel Information</h5>

                    <form wire:submit.prevent="save">
                        <div class="flex flex-wrap -mx-3">
                            {{-- L-1 --}}
                            <div class="max-w-full px-3 w-1/2 lg:flex-none">
                                <div class="flex flex-col h-full">
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                        Accountable Personnel
                                    </h6>
                                    <div class="mb-4">
                                        <select wire:model="inventory.accountable_personnel_id"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            id="accountable-personnel-id" required>
                                            <option value="">Select Accountable Personnel</option>
                                            @foreach ($accountablePersonnelOptions as $id => $name)
                                                <option value="{{ $id }}">{{ $name }}</option>
                                            @endforeach
                                        </select>
                                        @error('inventory.accountable_personnel_id')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Division
                                    </h6>
                                    <div class="mb-4">
                                        <select wire:model="inventory.division_id"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            id="division-id" required>
                                            <option value="">Select Division</option>
                                            @foreach ($divisionOptions as $division)
                                                <option value="{{ $division->id }}">{{ $division->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('inventory.division_id')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- R-1 --}}
                            <div class="max-w-full px-3 w-1/2 lg:flex-none">
                                <div class="flex flex-col h-full">
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Province
                                    </h6>
                                    <div class="mb-4">
                                        <select wire:model="inventory.province_id"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            id="province-id" required>
                                            <option value="">Select Province</option>
                                            @foreach ($provinceOptions as $province)
                                                <option value="{{ $province->id }}">{{ $province->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('inventory.province_id')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Operating
                                        Unit</h6>
                                    <div class="mb-4">
                                        <select wire:model="inventory.operating_unit_id"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            id="operating-unit-id" required>
                                            <option value="">Select Operating Unit</option>
                                            @foreach ($operatingUnitOptions as $unit)
                                                <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('inventory.operating_unit_id')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="font-bold py-3">Item Information</h5>
                        <div class="flex flex-wrap -mx-3">
                            {{-- L-2 --}}
                            <div class="max-w-full px-3 w-1/2 lg:flex-none">
                                <div class="flex flex-col h-full">
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Make</h6>
                                    <div class="mb-4">
                                        <select wire:model="inventory.make_id"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            id="make-id" required>
                                            <option value="">Select Make</option>
                                            @foreach ($makeOptions as $make)
                                                <option value="{{ $make->id }}">{{ $make->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('inventory.make_id')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Type</h6>
                                    <div class="mb-4">
                                        <select wire:model="inventory.type_id"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            id="type-id" required>
                                            <option value="">Select Type</option>
                                            @foreach ($typeOptions as $type)
                                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('inventory.type_id')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Serial
                                        Number</h6>
                                    <div class="mb-4">
                                        <input wire:model.blur="inventory.serial_number" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Serial Number" id="serial-number" />
                                        @error('inventory.serial_number')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                        Description</h6>
                                    <div class="mb-4">
                                        <input wire:model.blur="inventory.description" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Description" id="description" />
                                        @error('inventory.description')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- R-2 --}}
                            <div class="max-w-full px-3 w-1/2 lg:flex-none">
                                <div class="flex flex-col h-full">
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Brand</h6>
                                    <div class="mb-4">
                                        <input wire:model.blur="inventory.brand" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Brand" id="brand" />
                                        @error('inventory.brand')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Model
                                    </h6>
                                    <div class="mb-4">
                                        <input wire:model.blur="inventory.model" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Model" id="model" />
                                        @error('inventory.model')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Property
                                        Number</h6>
                                    <div class="mb-4">
                                        <input wire:model.blur="inventory.property_number" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Property Number" id="property-number" />
                                        @error('inventory.property_number')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="font-bold py-3">Property Information</h5>
                        <div class="flex flex-wrap -mx-3">
                            {{-- L-3 --}}
                            <div class="max-w-full px-3 w-1/2 lg:flex-none">
                                <div class="flex flex-col h-full">
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                        Acquisition Date</h6>
                                    <div class="mb-4">
                                        <input wire:model.blur="inventory.acquisition_date" type="date"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Acquisition Date" id="acquisition-date" required />
                                        @error('inventory.acquisition_date')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Balance
                                        Per Card</h6>
                                    <div class="mb-4">
                                        <input wire:model.blur="inventory.balance_per_card" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Balance Per Card" id="balance-per-card" required />
                                        @error('inventory.balance_per_card')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Source
                                    </h6>
                                    <div class="mb-4">
                                        <input wire:model.blur="inventory.source" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Source" id="source" />
                                        @error('inventory.source')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Remarks
                                    </h6>
                                    <div class="mb-4">
                                        <input wire:model.blur="inventory.remarks" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Remarks" id="remarks" />
                                        @error('inventory.remarks')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- R-3 --}}
                            <div class="max-w-full px-3 w-1/2 lg:flex-none">
                                <div class="flex flex-col h-full">
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Unit
                                        Value</h6>
                                    <div class="mb-4">
                                        <input wire:model.blur="inventory.unit_value" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Unit Value" id="unit-value" required />
                                        @error('inventory.unit_value')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Year
                                        Acquired</h6>
                                    <div class="mb-4">
                                        <input wire:model.blur="inventory.year_acquired" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Year Acquired" id="year-acquired" required />
                                        @error('inventory.year_acquired')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">On-Hand
                                        Per Count</h6>
                                    <div class="mb-4">
                                        <input wire:model.blur="inventory.on_hand_per_count" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="On-Hand Per Count" id="on-hand-per-count" required />
                                        @error('inventory.on_hand_per_count')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Status
                                    </h6>
                                    <div class="mb-4">
                                        <select wire:model="inventory.status_id"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            id="status-id" required>
                                            <option value="">Select Status</option>
                                            @foreach ($statusOptions as $status)
                                                <option value="{{ $status->id }}">{{ $status->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('inventory.status_id')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full px-3 mt-4 text-center">
                            <button type="submit"
                                class="inline-block w-full bg-blue-500 px-6 py-2.5 text-white font-bold text-center leading-tight uppercase rounded shadow-md hover:bg-blue-600 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>
