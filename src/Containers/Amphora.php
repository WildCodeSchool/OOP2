<?php

namespace App\Containers;

/**
 * this class represents amphorae in our business logic
 * 
 * it has the `final` keyword because we dont want to create "sub amphorae" entities,
 * we also did not have to explicitely use `Container` because it is in the same namespace
 * 
 */
final class Amphora extends Container {}