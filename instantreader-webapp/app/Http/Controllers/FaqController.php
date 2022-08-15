<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\QuestionAndAnswer;
use Purifier;

class FaqController extends Controller
{
    //FAQ Admin View
    public function admin_index() {
        $data = Faq::first();
        $faqs = QuestionAndAnswer::all();
        return view('marketing-admin.learn-more.faq', [ 'data' => $data, 'faqs' => $faqs ]);
    }

    //Update Page Data (page title, page description, page keywords, page author)
    public function update_page(Request $req) {
        $name = $req->name;
        $value = $req->value;
        Faq::first()->update([$name => $value]);
    }

    //Add new question and answer
    public function store_question_and_answer(Request $req) {
        $faq = new QuestionAndAnswer();

        $faq->question = Purifier::clean($req->question);
        $faq->answer = Purifier::clean($req->answer);

        $faq->save();
    }

    //Delete existing question and answer
    public function delete_question_and_answer(Request $req) {
        QuestionAndAnswer::where('id', $req->id)->delete();
    }

    //Update existing question and answer
    public function update_question_and_answer(Request $req) {
        QuestionAndAnswer::where('id', $req->id)->update(['question' => $req->question, 'answer' => $req->answer]);
    }

    //FAQ View
    public function index() {
        $data = Faq::first();
        $faqs = QuestionAndAnswer::all();
        return view('learn-more.faq', [ 'data' => $data, 'faqs' => $faqs ]);
    }
}
