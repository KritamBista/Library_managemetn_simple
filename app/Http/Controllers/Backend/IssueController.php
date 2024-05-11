<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\BookIssue;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PHPUnit\TestRunner\TestResult\Issues\Issue;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $issue =BookIssue::where('status','out')->get();
        return view('admin.issue.index',compact('issue'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students =Student::all();
        $books=Book::all();
        return view('admin.issue.create',compact('students', 'books' ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $expire = Carbon::now()->addDay($request->day);
       $issue = new BookIssue();
       $issue->BookID = $request->BookID;
       $issue->book_id = $request->book_id;
       $issue->student_id = $request->student_id;
       $issue->student_id = $request->student_id;
       $issue->expiry_date = $expire;
       $issue->save();
       $book =Book::find($issue->book_id);
       $book->decrement('quantity');


       return redirect()->back();







    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $issue =BookIssue::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $issue =BookIssue::find($id);
        $issue->status ='in';
        $issue->update();
        $book = Book::find($issue->book_id);
        $book->increment('quantity');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
