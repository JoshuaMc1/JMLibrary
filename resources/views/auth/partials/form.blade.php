{{ html()->form('POST', route('login'))->class('flex flex-col w-full gap-2')->id('fLogin')->open() }}

<div class="form-control w-full">
    {{ html()->label()->class('label')->for('account')->open() }}
    {{ html()->span()->class('label-text')->text(trans('auth/index.account')) }}
    {{ html()->label()->close() }}

    {{ html()->input('text', 'account')->class('input input-bordered w-full')->id('account') }}

    <div id="cA" />

    @error('account')
        {{ html()->label()->class('label')->open() }}

        {{ html()->span()->class('label-text-alt text-error')->text($message) }}

        {{ html()->label()->close() }}
    @enderror
</div>

<div class="form-control w-full">
    {{ html()->label()->class('label')->for('password')->open() }}
    {{ html()->span()->class('label-text')->text(trans('auth/index.password')) }}
    {{ html()->label()->close() }}

    {{ html()->input('password', 'password')->class('input input-bordered w-full')->id('password') }}

    <div id="cP" />

    @error('password')
        {{ html()->label()->class('label')->open() }}

        {{ html()->span()->class('label-text-alt text-error')->text($message) }}

        {{ html()->label()->close() }}
    @enderror
</div>

{{ html()->submit(trans('auth/index.login'))->class('btn btn-primary w-full my-4') }}

{{ html()->form()->close() }}
