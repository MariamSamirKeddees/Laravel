    <?php

    use App\Http\Controllers\postController;
    use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get("posts/trash", [postController::class, "showDeletedPosts"])
    ->name("posts.trash");

    Route::post("posts/restore-all", [postController::class, "restoreAll"])
    ->name("posts.restoreAll");

    Route::post("posts/{id}/restore", [postController::class, "restore"])
    ->name("posts.restore")->where("id", "[0-9]+");

    Route::delete("posts/{id}/hard-destroy", [postController::class, "hardDestroy"])
    ->name("posts.hardDestroy")->where("id", "[0-9]+");

    // Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');


    Route::resource("posts", postController::class);

    Route::middleware('auth')->group(function () {
        Route::resource('posts', PostController::class);
    });

