<div class="flex flex-wrap mt-1 -mx-3">
    <div class="w-full px-1 mb-6 e">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-1">
                <h3 class="font-bold py-1">Editing Inventory</h3>
                <h5 class="font-bold py-1">Personnel Information</h5>

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

                <form wire:submit.prevent="save">
                    @csrf
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

                                <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                    Division
                                </h6>
                                <div class="mb-4">
                                    <select wire:model="inventory.division_id"
                                        class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                        id="division-id" required>
                                        <option value="">Select Division</option>
                                        @foreach ($divisionOptions as $id => $name)
                                            <option value="{{ $id }}">{{ $name }}</option>
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
                                        @foreach ($provinceOptions as $id => $name)
                                            <option value="{{ $id }}">{{ $name }}</option>
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
                                        @foreach ($operatingUnitOptions as $id => $name)
                                            <option value="{{ $id }}">{{ $name }}</option>
                                        @endforeach
                                    </select>
                                    @error('inventory.operating_unit_id')
                                        <p class="text-size-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="font-bold py-1">Item Information</h5>
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
                                        @foreach ($makeOptions as $id => $name)
                                            <option value="{{ $id }}">{{ $name }}</option>
                                        @endforeach
                                    </select>
                                    @error('inventory.make_id')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Type</h6>
                                <div class="mb-4">
                                    <select wire:model="inventory.type_id"
                                        class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                        id="type-id" required>
                                        <option value="">Select Type</option>
                                        @foreach ($typeOptions as $id => $name)
                                            <option value="{{ $id }}">{{ $name }}</option>
                                        @endforeach
                                    </select>
                                    @error('inventory.type_id')
                                        <p class="text-size-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                                <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Serial Number
                                </h6>
                                <div class="mb-4">
                                    <input wire:model="inventory.serial_number"
                                        class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                        type="text" placeholder="Serial Number" />
                                    @error('inventory.serial_number')
                                        <p class="text-size-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                                <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                    Description
                                </h6>
                                <div class="mb-4">
                                    <input wire:model="inventory.description"
                                        class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                        type="text" placeholder="Description" />
                                    @error('inventory.description')
                                        <p class="text-size-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>


                                <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Status</h6>
                                <div class="mb-4">
                                    <select wire:model="inventory.status_id"
                                        class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                        id="status-id" required>
                                        <option value="">Select Status</option>
                                        @foreach ($statusOptions as $id => $name)
                                            <option value="{{ $id }}">{{ $name }}</option>
                                        @endforeach
                                    </select>
                                    @error('inventory.status_id')
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
                                    <input wire:model="inventory.brand"
                                        class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                        type="text" placeholder="Brand" />
                                    @error('inventory.brand')
                                        <p class="text-size-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Model</h6>
                                <div class="mb-4">
                                    <input wire:model="inventory.model"
                                        class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                        type="text" placeholder="Model" />
                                    @error('inventory.model')
                                        <p class="text-size-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                    Property Number
                                </h6>
                                <div class="mb-4">
                                    <input wire:model="inventory.property_number"
                                        class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                        type="number" placeholder="Property Number" />
                                    @error('inventory.property_number')
                                        <p class="text-size-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>


                                <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                    Unit Value
                                </h6>
                                <div class="mb-4">
                                    <input wire:model="inventory.unit_value"
                                        class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                        type="number" step="0.01" placeholder="Unit Value" />
                                    @error('inventory.unit_value')
                                        <p class="text-size-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    
                    


                                <div class="flex flex-wrap -mx-3">
                                    <div class="max-w-full px-3 w-1/2 lg:flex-none">
                                        <div class="flex flex-col h-full">


                                            <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                                Acquisition
                                                Date </h6>
                                            <div class="mb-4">
                                                <input wire:model="inventory.acquisition_date"
                                                    class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                                    type="date" />
                                                @error('inventory.acquisition_date')
                                                    <p class="text-size-sm text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>


                                        </div>
                                    </div>
                                </div>



                                <div class="flex flex-wrap -mx-3">
                                    <div class="max-w-full px-3 w-1/2 lg:flex-none">
                                        <div class="flex flex-col h-full">
                                            <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                                Balance Per Card</h6>
                                            <div class="mb-4">
                                                <input wire:model.blur="inventory.balance_per_card" type="text"
                                                    class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                                    placeholder="Balance Per Card" id="balance-per-card" required />
                                                @error('inventory.balance_per_card')
                                                    <p class="text-size-sm text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                                Source</h6>
                                            <div class="mb-4">
                                                <input wire:model.blur="inventory.source" type="text"
                                                    class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                                    placeholder="Source" id="source" />
                                                @error('inventory.source')
                                                    <p class="text-size-sm text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                                Remarks</h6>
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
                                    <div class="max-w-full px-3 w-1/2 lg:flex-none">
                                        <div class="flex flex-col h-full">

                                            <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                                Unit Value</h6>
                                            <div class="mb-4">
                                                <input wire:model.blur="inventory.unit_value" type="text"
                                                    class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                                    placeholder="Unit Value" id="unit-value" required />
                                                @error('inventory.unit_value')
                                                    <p class="text-size-sm text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                                Year Acquired</h6>
                                            <div class="mb-4">
                                                <input wire:model.blur="inventory.year_acquired" type="text"
                                                    class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                                    placeholder="Year Acquired" id="year-acquired" required />
                                                @error('inventory.year_acquired')
                                                    <p class="text-size-sm text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                                On-Hand Per Count</h6>                                         
                                            <div class="mb-4">
                                                <input wire:model.blur="inventory.on_hand_per_count" type="text"
                                                    class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                                    placeholder="On-Hand Per Count" id="on-hand-per-count" required />
                                                @error('inventory.on_hand_per_count')
                                                    <p class="text-size-sm text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                                Status</h6>
                                            <div class="mb-4">
                                                <select wire:model="inventory.status_id"
                                                    class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                                    id="status-id" required>
                                                    <option value="">Select Status</option>
                                                    @foreach ($statusOptions as $id => $name)
                                                        <option value="{{ $id }}">{{ $name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('inventory.status_id')
                                                    <p class="text-size-sm text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            
                                        </div>
                                    </div>
                                </div>





                                <div class="flex justify-end">
                                    <button type="submit"
                                        class="inline-block px-6 py-3 mb-0 font-bold text-center text-white uppercase align-middle transition-all border-0 rounded cursor-pointer bg-fuchsia-500 hover:-translate-y-px active:shadow-soft-xs leading-pro text-size-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25"
                                        wire:loading.attr="disabled">
                                        <span wire:loading.remove wire:target="save">Save</span>
                                        <span wire:loading wire:target="save">Saving...</span>
                                    </button>
                                </div>

                </form>
            </div>
        </div>
    </div>
</div>
