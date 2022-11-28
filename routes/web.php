<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\JurnalisController;
use App\Http\Controllers\BeritaController;

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get("/hello/{nama}/{gender}", function($nama, $gender) {
    echo "Hello ".$nama. " seorang ". $gender;
})->name("hello");


Route::get("/hii/panggilan/{nama}", [TestingController::class, "hii"])->name("panggilan");

Route::get("/tentang-saya", [TestingController::class, "about"])->name("about");

Route::get("/my-journey", [TestingController::class, "journey"])->name("journey");

Route::get("/my-work", function() {
    return view("my-work");
})->name("work");

Route::get("/my-publication", function() {
    return view("my-publication");
})->name("publication");

Route::get("/my-courses", function() {
    return view("my-courses");
})->name("courses");

Route::get("/tampil-semua-user", [UserController::class, "tampil"])->name("user_all"); // URL Tampil Semua User
Route::get("/input-user", [UserController::class, "formInput"])->name("user_input");   // URL Form Input
Route::post("/simpan-user", [UserController::class, "simpan"])->name("user_simpan");   // URL Simpan User

Route::get("/edit-user/{id}", [UserController::class, "formEdit"])->name("user_edit"); // URL Form Edit
Route::put("/update-user/{id}", [UserController::class, "update"])->name("user_update"); // URL Form Edit


Route::delete("/hapus-user/{id}", [UserController::class, "hapus"])->name("user_hapus"); // URL Form hapus
Route::get("/tampil-user/{id}", [UserController::class, "show"])->name("user_show"); // URL Form hapus

Route::get("/login", [SecurityController::class, "formLogin"])->name("login");
Route::post("/proses-login", [SecurityController::class, "prosesLogin"])->name("proses_login");
Route::get("/logout", [SecurityController::class, "logout"])->name("logout");

Route::middleware("auth")->group(function() {
    Route::get("kategori/buat", [KategoriController::class, 'buat'])->name("buat_kategori");
    Route::post("kategori/simpan", [KategoriController::class, 'simpan'])->name("simpan_kategori");
    Route::get("kategori/tampil/{id}", [KategoriController::class, 'tampil'])->name("tampil_kategori");
    Route::get("kategori/semua", [KategoriController::class, 'semua'])->name("semua_kategori");
    Route::get("kategori/ubah/{id}", [KategoriController::class, 'ubah'])->name("ubah_kategori");
    Route::put("kategori/update/{id}", [KategoriController::class, 'update'])->name("update_kategori");
    Route::delete("kategori/hapus/{id}", [KategoriController::class, 'hapus'])->name("hapus_kategori");

    Route::get("jurnalis/buat", [JurnalisController::class, 'buat'])->name("buat_jurnalis");
    Route::post("jurnalis/simpan", [JurnalisController::class, 'simpan'])->name("simpan_jurnalis");
    Route::get("jurnalis/tampil/{id}", [JurnalisController::class, 'tampil'])->name("tampil_jurnalis");
    Route::get("jurnalis/semua", [JurnalisController::class, 'semua'])->name("semua_jurnalis");
    Route::get("jurnalis/ubah/{id}", [JurnalisController::class, 'ubah'])->name("ubah_jurnalis");
    Route::put("jurnalis/update/{id}", [JurnalisController::class, 'update'])->name("update_jurnalis");
    Route::delete("jurnalis/hapus/{id}", [JurnalisController::class, 'hapus'])->name("hapus_jurnalis");

    Route::get("berita/buat", [BeritaController::class, "formInput"])->name("buat_berita");
    Route::post("berita/simpan", [BeritaController::class, "simpan"])->name("simpan_berita");
    Route::get("berita/tampil/{id}", [BeritaController::class, "tampil"])->name("tampil_berita");

});


