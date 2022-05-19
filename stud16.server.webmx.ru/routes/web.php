<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// сработает на http://muzei-mira/
Route::get ('/', [MainController::class, "acMain"]);

// сработает на http://muzei-mira/velikie-muzei
Route::get ('/historic', [MainController::class, "acVelikieMuzei"]);

// сработает на http://muzei-mira/novosti
Route::get ('/novosti', [MainController::class, "acNovosti"]);

// сработает на http://muzei-mira/zhivopis
Route::get ('/pol_part', [MainController::class, "acZhivopis"]);

// сработает на 
// http://muzei-mira/zhivopis/russkaya-zhivopis
// http://muzei-mira/zhivopis/ispanskaya-zhivopis и др.
Route::get ('/pol_part/{subzhivopis}', [MainController::class, "acSubZhivopis"]);

// сработает на http://muzei-mira/skulptura
Route::get ('/skulptura', [MainController::class, "acSkulptura"]);

// // сработает на http://muzei-mira/goroda
// Route::get ('/goroda', [MainController::class, "acGoroda"]);

// // сработает на 
// // http://muzei-mira/goroda/moskva
// // http://muzei-mira/goroda/barselona и др.
// Route::get ('/goroda/{subgorod}', [MainController::class, "acSubGoroda"]);

// // сработает на http://muzei-mira/neobychnye-muzei-mira
// Route::get ('/historic', [MainController::class, "acNeobychnyeMuzei"]);

// сработает на http://muzei-mira/console
Route::get ('/console', [AdminController::class, "acConsole"]);

// сработает на http://muzei-mira/console/update/{параметр}
// запрос на вывод страницы обновления записи
Route::get ('/console/update/{id}', [AdminController::class, "acConsoleFormUpdate"]);

// сработает на http://muzei-mira/console/add
// запрос на вывод страницы добавления записи
// обратите внимание - исползуется POST-запрос
Route::post ('/console/add', [AdminController::class, "acConsoleFormAdd"]);

// сработает на http://muzei-mira/admin/modification
// обратите внимание - исползуется POST-запрос
// передаем данные формы на обновление / добавление данных
Route::post ('/admin/modification',  [AdminController::class, "acDataModification"]);

// сработает на http://muzei-mira/admin/delete/{параметр}
// выполняем запрос на удаление данных
Route::get ('/admin/delete/{id}',  [AdminController::class, "acDataDelete"]);

//открываем форму создания страницы
Route::post ('/form', [AdminController::class, "acConsoleAdd"]);
//создаем страницу
Route::post ('/admin/sozdanie', [AdminController::class, "acDataCreate"]);
//переход на новую страницу
Route::post ('/{pages}', [MainController::class, "acCustom"]);