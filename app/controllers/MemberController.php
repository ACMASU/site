<?php

class MemberController extends Controller
{
    protected $member;

    public function __construct()
    {
        $this->member = $this->model('Member');
    }

    public function index()
    {
        $members = Member::all()->all();
        return ['view' => 'member/index', 'data' => ['page' => 'Roster', 'members' => $members]];
    }

    public function register()
    {
        return ['view' => 'member/register', 'data' => ['page' => 'Sign Up']];
    }

    public function create($data)
    {
        $input = $data['post'];

        $member = new Member;
        $member->firstName = $input['firstName'];
        $member->lastName = $input['lastName'];
        $member->email = $input['email'];
        $member->major = $input['major'];
        $member->dateJoined = date('Y-m-d');
        $member->grandfathered = false;
        $member->paid = false;

        try {
            $member->save();
            return ['view' => 'member/confirmation', 'data' => ['page' => 'Sign up confimation']];
        } catch (PDOException $e) {
            return ['view' => 'error', 'data' => ['message' => 'Could not register. Please contact support.']];
        }

    }

    public function updatePaid($id, $paid)
    {
        $member = Member::find($id);
        $member->paid = true;
        $member->save();

    }
}
