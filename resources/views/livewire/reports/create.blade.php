<div class="fixed inset-0 z-10 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>?
        <div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                    <div class="">
                        <div class="mb-4">
                            <label for="exampleFormControlInput1"
                                class="block mb-2 text-sm font-bold text-gray-700">student_id:</label>
                            <input type="text"
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="exampleFormControlInput1" placeholder="Enter student_id" wire:model="student_id">
                            @error('student_id') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        {{-- <div class="mb-4">
                            <label for="exampleFormControlInput2"
                                class="block mb-2 text-sm font-bold text-gray-700">Subject_id:</label>
                            <textarea
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="exampleFormControlInput2" wire:model="Subject_id"
                                placeholder="Enter Subject_id"></textarea>
                            @error('Subject_id') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div> --}}
                        <div class="mb-4">
                            <label for="exampleFormControlInput1"
                                class="block mb-2 text-sm font-bold text-gray-700">classes_id:</label>
                            <input type="text"
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="exampleFormControlInput1" placeholder="Enter classes_id" wire:model="classes_id">
                            @error('classes_id') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput2"
                                class="block mb-2 text-sm font-bold text-gray-700">subject_score:</label>
                            <textarea
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="exampleFormControlInput2" wire:model="subject_score"
                                placeholder="Enter subject_score"></textarea>
                            @error('subject_score') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>

                        <div class="mb-4">
                            <label for="exampleFormControlInput1"
                                class="block mb-2 text-sm font-bold text-gray-700">subject_grade:</label>
                            <input type="text"
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="exampleFormControlInput1" placeholder="Enter subject_grade"
                                wire:model="subject_grade">
                            @error('subject_grade') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput2"
                                class="block mb-2 text-sm font-bold text-gray-700">exam_id:</label>
                            <textarea
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="exampleFormControlInput2" wire:model="exam_id"
                                placeholder="Enter exam_id"></textarea>
                            @error('exam_id') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput1"
                                class="block mb-2 text-sm font-bold text-gray-700">test_id:</label>
                            <input type="text"
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="exampleFormControlInput1" placeholder="Enter test_id" wire:model="test_id">
                            @error('test_id') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput2"
                                class="block mb-2 text-sm font-bold text-gray-700">year:</label>
                            <textarea
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="exampleFormControlInput2" wire:model="year" placeholder="Enter year"></textarea>
                            @error('year') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput2"
                                class="block mb-2 text-sm font-bold text-gray-700">term_id:</label>
                            <textarea
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="exampleFormControlInput2" wire:model="term_id"
                                placeholder="Enter term_id"></textarea>
                            @error('term_id') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>

                        <div class="mb-4">
                            <label for="exampleFormControlInput1"
                                class="block mb-2 text-sm font-bold text-gray-700">report_content:</label>
                            <input type="text"
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="exampleFormControlInput1" placeholder="Enter report_content"
                                wire:model="report_content">
                            @error('report_content') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput2"
                                class="block mb-2 text-sm font-bold text-gray-700">teachers_comments:</label>
                            <textarea
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="exampleFormControlInput2" wire:model="teachers_comments"
                                placeholder="Enter teachers_comments"></textarea>
                            @error('teachers_comments') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        {{-- <div class="mb-4">
                            <label for="exampleFormControlInput1"
                                class="block mb-2 text-sm font-bold text-gray-700">grade:</label>
                            <input type="text"
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="exampleFormControlInput1" placeholder="Enter grade" wire:model="grade">
                            @error('grade') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div> --}}
                        <div class="mb-4">
                            <label for="exampleFormControlInput2"
                                class="block mb-2 text-sm font-bold text-gray-700">other_report_details:</label>
                            <textarea
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="exampleFormControlInput2" wire:model="other_report_details"
                                placeholder="Enter other_report_details"></textarea>
                            @error('other_report_details') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>
                <footer
                    class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800">
                    <button @click="closeModal"
                        class="w-full px-5 py-3 text-sm font-medium leading-5 text-white, text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                        Cancel
                    </button>
                    <button
                        class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                       Submit
                    </button>
                </footer>
            </form>
        </div>
    </div>
</div>
