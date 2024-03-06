<div>
    <div class="ca831 cofxq">
        <h1 class="text-3xl font-bold text-slate-800 dark:text-slate-100 crkc7">{{ $title }} ✨</h1>
        <!-- Form -->
            <div class="cd0mw ce97l">


                @foreach($formFields as $field)
                    @if($field['type'] == 'header')
                        <{{$field['subtype']}} class="text-2xl font-bold text-slate-800 dark:text-slate-100 crkc7 {{$field['className'] ?? ''}}">{{ $field['label'] }}</{{$field['subtype']}}>
                    @endif
                    @if($field['type'] == 'paragraph')
                        <p class="text-2xl font-bold text-slate-800 dark:text-slate-100 crkc7 {{$field['className'] ?? ''}}">{{ $field['label'] }}</p>
                    @endif
                    @if($field['type'] == 'text')
                        <div class="flex flex-col mb-4">
                            <label for="{{ $field['name'] }}" class="mb-2 text-sm font-semibold text-slate-800 dark:text-slate-100">{{ $field['label'] }} {!! $field['required'] ?? false ? '<span class="text-red-500">*</span>' : '' !!}
                            </label>
                            <input type="{{ $field['type'] }}"
                            name="{{ $field['name'] }}"
                            id="{{ $field['name'] }}"
                            class="px-3 py-2 border border-slate-300 dark:border-slate-700 rounded-md focus:outline-none focus:border-slate-500 dark:focus:border-slate-500 {{ $field['className']}}"
                            {{ $field['required'] ?? ''}}
                            placeholder="{{ $field['placeholder'] ?? ''}}"
                            value="{{ $field['value'] ?? ''}}"
                            maxlength="{{ $field['maxlength'] ?? ''}}"
                            />
                            @error('form.' . $field['name']) <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                    @endif
                    @if($field['type'] == 'number')
                        <div class="flex flex-col mb-4">
                            <label for="{{ $field['name'] }}" class="mb-2 text-sm font-semibold text-slate-800 dark:text-slate-100">{{ $field['label'] }} {!! $field['required'] ?? false ? '<span class="text-red-500">*</span>' : '' !!}
                            </label>
                            <input type="number"
                            name="{{ $field['name'] }}"
                            id="{{ $field['name'] }}"
                            class="px-3 py-2 border border-slate-300 dark:border-slate-700 rounded-md focus:outline-none focus:border-slate-500 dark:focus:border-slate-500 {{ $field['className']}}"
                            {{ $field['required'] ?? ''}}
                            placeholder="{{ $field['placeholder'] ?? ''}}"
                            value="{{ $field['value'] ?? ''}}"
                            {{ isset($field['min']) ? 'min='.$field['min'] : '' }}
                            {{ isset($field['max']) ? 'max='.$field['max'] : '' }}
                            {{ isset($field['maxlength']) ? 'maxlength='.$field['maxlength'] : '' }}
                            />
                            @error('form.' . $field['name']) <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                    @endif
                    @if($field['type'] == 'textarea')
                        <div class="flex flex-col mb-4">
                            <label for="{{ $field['name'] }}" class="mb-2 text-sm font-semibold text-slate-800 dark:text-slate-100">{{ $field['label'] }} {!! $field['required'] ?? false ? '<span class="text-red-500">*</span>' : '' !!}
                            </label>
                            <textarea
                            name="{{ $field['name'] }}"
                            id="{{ $field['name'] }}"
                            class="px-3 py-2 border border-slate-300 dark:border-slate-700 rounded-md focus:outline-none focus:border-slate-500 dark:focus:border-slate-500 {{ $field['className'] ?? ''}}"
                            {{ $field['required'] ?? ''}}
                            placeholder="{{ $field['placeholder'] ?? ''}}"
                            maxlength="{{ $field['maxlength'] ?? ''}}"
                            rows="{{ $field['rows'] ?? '3'}}"
                            >{{ $field['value'] ?? ''}}</textarea>
                            @error('form.' . $field['name']) <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                    @endif
                    @if($field['type'] == 'select')
                        <div class="flex flex-col mb-4">
                            <label for="{{ $field['name'] }}" class="mb-2 text-sm font-semibold text-slate-800 dark:text-slate-100">{{ $field['label'] }} {!! $field['required'] ?? false ? '<span class="text-red-500">*</span>' : '' !!}
                            </label>
                            <select
                            name="{{ $field['name'] }}"
                            id="{{ $field['name'] }}"
                            class="px-3 py-2 border border-slate-300 dark:border-slate-700 rounded-md focus:outline-none focus:border-slate-500 dark:focus:border-slate-500 {{ $field['className'] ?? ''}}"
                            {{ $field['required'] ?? ''}}
                            >
                                @foreach($field['values'] as $option)
                                    <option value="{{ $option['value'] }}"
                                    {!! $option['selected'] ?? false ? 'selected="selected"' : '' !!}
                                    >{{ $option['label'] }}</option>
                                @endforeach
                            </select>
                            @error('form.' . $field['name']) <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                    @endif

                    @if($field['type'] == 'hidden')
                        <input type="hidden" name="{{ $field['name'] }}" value="{{ $field['value'] ?? ''}}">
                    @endif
                @endforeach


            </div>
    </div>
</div>
