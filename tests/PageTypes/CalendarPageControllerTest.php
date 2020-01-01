<?php

namespace TitleDK\Calendar\Tests\PageTypes;

use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Dev\FunctionalTest;
use \SilverStripe\Dev\SapphireTest;
use SilverStripe\Security\Member;
use TitleDK\Calendar\Events\Event;
use TitleDK\Calendar\PageTypes\CalendarPage;
use TitleDK\Calendar\PageTypes\CalendarPageController;

class CalendarPageControllerTest extends FunctionalTest
{
    protected static $fixture_file = ['tests/registered-events.yml'];

    /** @var CalendarPage */
    private $calendarPage;

    /** @var CalendarPageController */
    private $calendarPageController;

    public function setUp()
    {
        parent::setUp();
        $this->calendarPage = $this->objFromFixture(CalendarPage::class, 'calendarpageconference');

        $this->calendarPageController = new CalendarPageController($this->calendarPage);

        // this is necessary to publish a page from the fixtures so that it can be seen
        $this->calendarPage->publishRecursive();
    }
    public function testInit()
    {
        $this->markTestSkipped('TODO');
    }

    /**
     * Test a load of the index page
     */
    public function testIndex()
    {
        $page = $this->get('/conference-page/');
        $this->assertEquals(200, $page->getStatusCode());
        $this->assertExactHTMLMatchBySelector('h1', ['<h1>Conference Page</h1>']);
        $this->assertExactHTMLMatchBySelector('.options',
            ['<div class="options">This is a test calendar page about a conference</div>']);
    }

    public function testUpcoming()
    {
        $this->markTestSkipped('TODO');
    }

    public function testRecent()
    {
        $this->markTestSkipped('TODO');
    }

    public function testEventlist()
    {
        $this->markTestSkipped('TODO');
    }

    public function testRegistered()
    {
        $this->markTestSkipped('TODO');
    }

    public function testEventregistration()
    {
        $this->markTestSkipped('TODO');
    }

    public function testCalendarview()
    {
        $this->markTestSkipped('TODO');
    }

    public function testFunction()
    {
        $this->markTestSkipped('TODO');
    }

    public function testDetail()
    {
        $this->markTestSkipped('TODO');
    }

    public function testTag()
    {
        $this->markTestSkipped('TODO');
    }

    public function testRegister()
    {
        $this->markTestSkipped('TODO');
    }

    public function testRegistrationsEnabled()
    {
        $this->assertFalse($this->calendarPageController->RegistrationsEnabled());
    }

    public function test_search_enabled()
    {
        $this->assertTrue($this->calendarPageController->SearchEnabled());
    }

    public function testEvents()
    {
        $this->markTestSkipped('TODO');
    }

    public function testCurrentCalendar()
    {
        $this->markTestSkipped('TODO');
    }

    public function testEventPageTitle()
    {
        $this->markTestSkipped('TODO');
    }

    public function testCurrentMonth()
    {
        $this->markTestSkipped('TODO');
    }

    public function testCurrentMonthDay()
    {
        $this->markTestSkipped('TODO');
    }

    public function testNextMonthDay()
    {
        $this->markTestSkipped('TODO');
    }

    public function testCurrentMonthStr()
    {
        $this->markTestSkipped('TODO');
    }

    public function testNextMonth()
    {
        $this->markTestSkipped('TODO');
    }

    public function testNextMonthLink()
    {
        $this->markTestSkipped('TODO');
    }

    public function testPrevMonth()
    {
        $this->markTestSkipped('TODO');
    }

    public function testPrevMonthLink()
    {
        $this->markTestSkipped('TODO');
    }

    public function testEventListLink()
    {
        $this->markTestSkipped('TODO');
    }

    public function testCalendarViewLink()
    {
        $this->markTestSkipped('TODO');
    }

    public function testSearchQuery()
    {
        $this->markTestSkipped('TODO');
    }

    public function testAllCalendars()
    {
        $this->markTestSkipped('TODO');
    }

    public function testFeedLink()
    {
        $this->markTestSkipped('TODO');
    }
}
