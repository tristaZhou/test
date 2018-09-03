<?php namespace Test\Permission\Contracts;

interface UserInterface
{
    public function roles();

    public function hasRole($name);

    public function can($permission);

    public function attachRole($role);

    public function detachRole($role);

    public function attachRoles($roles);

    public function detachRoles($roles);
}
