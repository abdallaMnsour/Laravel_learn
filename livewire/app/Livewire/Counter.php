<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\Rule;
use Illuminate\Validation\Rule as ValidationRule;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use Livewire\withPagination;

class Counter extends Component
{

    use withPagination;

    #[Rule('required|min:3|max:20')]
    public $name = '';

    #[Rule('required|email|unique:users')]
    public $email = '';

    // #[Rule('required|min:3|max:20')]
    public $nameUpdate = '';

    // #[Rule('required|email|unique:users')]
    public $emailUpdate = '';

    #[Rule('required|min:8|max:18')]
    public $password = '';

    public $search = '';

    public $userId = 0;

    public function handelSubmit ()
    {
        $this->name = trim($this->name);
        $this->email = trim($this->email);
        $this->password = trim($this->password);

        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $this->reset(['name', 'email', 'password']);

        session()->flash('success', 'user created successfully');
    }

    public function handelEdit ($editID, User $user)
    {
        $this->userId = $editID;

        $user = User::find($editID);

        $this->nameUpdate = $user->name;
        $this->emailUpdate = $user->email;
    }

    public function handelUpdate ($updateId)
    {
        $this->nameUpdate = trim($this->nameUpdate);
        $this->emailUpdate = trim($this->emailUpdate);

        $this->validate([
            'nameUpdate' => 'required|min:3|max:20',
            'emailUpdate' => ['required', 'email', ValidationRule::unique('users', 'email')->ignore($updateId)],
        ]);

        User::where('id', $updateId)->update([
            'name' => $this->nameUpdate,
            'email' => $this->emailUpdate,
        ]);

        $this->reset(['nameUpdate', 'emailUpdate', 'userId']);
    }

    public function handelDelete ($id)
    {
        if ($user = User::find($id)) {
            // $user->delete();
            session()->flash('suc_delete', 'user has deleted successfully');
        } else {
            session()->flash('err_delete', 'user dos\'t exest');
        }
    }

    public function render()
    {
        $users = User::where('name', 'like', "%{$this->search}%")->paginate(5);
        return view('livewire.counter', ['users' => $users]);
    }

    public function cancel () {
        $this->reset(['userId']);
    }
}