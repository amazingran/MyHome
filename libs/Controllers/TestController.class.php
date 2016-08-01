<?php
class TestController
{
    public function show()
    {
        $test=new TestModel();
        $result=$test->get();
        $testView=new TestView();
        $testView->display($result);
    }
}