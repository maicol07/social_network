<div>
    <div class="mdc-card mdc-card--outlined">
        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell--span-3">
                    <div>
                        <img class="mdc-elevation--z8 image-profile"
                             src="{{Storage::disk('public')->url('profile/images/' . $user->profileImage)}}"
                             alt="image profile" />
                    </div>
                    <x-button id="edit-profile-button" label="edit profile" wire:click="openDialog('profile-dialog')"
                              variant="outlined" trailing-icon="true" icon="pencil" />
                </div>
                <div class="mdc-layout-grid__cell--span-9">
                    <div class="mdc-layout-grid__inner">
                        <div class="mdc-layout-grid__cell--span-4">
                            <div>{{$numberPosts}}</div>
                            <div>@lang('posts')</div>
                        </div>
                        <div class="mdc-layout-grid__cell--span-4">
                            <div>{{$numberFollowers}}</div>
                            <div>@lang('followers')</div>
                        </div>
                        <div class="mdc-layout-grid__cell--span-4">
                            <div>{{$numberFollows}}</div>
                            <div>@lang('follows')</div>
                        </div>
                        <div class="mdc-layout-grid__cell--span-12">
                            <div>{{$user->bio}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-dialog id="profile-dialog" title="Edit Profile">
            <livewire:user.dialog :user="$user"/>
        </x-dialog>
    </div>

    <x-image-list>
        @foreach($posts as $post)
            <x-image-list-item text="{{$post['text']}}" src="{{$post['img']}}" alt="{{$post['alt']}}" />
        @endforeach
    </x-image-list>
</div>
