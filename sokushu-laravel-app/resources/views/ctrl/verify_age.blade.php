@extends('layouts.base')
@section('title', $appTitle.'年齢確認')
@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">年齢の確認</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('check.age') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="age_confirmation" class="col-md-6 col-form-label text-md-right">あなたは18歳以上ですか？</label>

                                <div class="col-md-6">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="age_confirmation" id="age_yes" value="yes" required>
                                        <label class="form-check-label" for="age_yes">はい</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="age_confirmation" id="age_no" value="no">
                                        <label class="form-check-label" for="age_no">いいえ</label>
                                    </div>

                                    @error('age_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        確認する
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
