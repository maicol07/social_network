<form wire:submit.prevent="accept">
    <div class="mdc-layout-grid__inner" id="dialog-layout">
        <span class="mdc-layout-grid__cell--span-{{$image && !$errors->has('image') ? 4 : 6}} dialog-label">
            @lang('Update profile image'):
        </span>
        <div class="mdc-layout-grid__cell--span-{{$image && !$errors->has('image') ? 4 : 6}}">
            <x-button id="attachment-btn" outlined :label="__('Upload File')" icon="upload" type="button" />
        </div>
        <input wire:model="image" id="edit-image" name="image" type="file"
               accept=".jpg,.jpeg,.png,.gif,.bmp,.svg,.webp">
        @error('image')<span class="error-dialog mdc-layout-grid__cell--span-12">{{ $message }}</span>@enderror
       <x-snackbar id="update-image-profile"/>
        @if ($image && !$errors->has('image'))
            <div class="mdc-layout-grid__cell--span-4">
                @lang('Updated file'): {{$image->getClientOriginalName()}}
            </div>
            <div class="mdc-layout-grid__cell--span-6 dialog-label" id="preview-image">
                <span>
                    @lang('Image Preview'):
                </span>
                <span>
                    <img class="mdc-elevation--z8 image-profile" id="temporary-image" src="{{$image->temporaryUrl()}}"
                         alt="preview image">
                </span>
            </div>
        @endif
    </div>
    <div>
        <x-textfield wire:model="user.bio" outlined textarea rows="8" cols="40" maxlength="{{$maxLength}}"
                     id="edit-bio" label="Edit Bio"/>
    </div>
    <div class="mdc-dialog__actions">
        <x-button dialog-button label="Cancel" variant="text" data-mdc-dialog-action="close"/>
        <x-button dialog-button label="OK" variant="text" type="submit"/>
    </div>

    <script wire:ignore>
        /** @type {HTMLButtonElement} */
        const button = document.querySelector('button#attachment-btn');
        button.addEventListener('click', () => {
            document.querySelector('input#edit-image')
                ?.click();
        });
    </script>
</form>
