<?php
/** @noinspection PhpUndefinedClassInspection */
/** @noinspection PhpFullyQualifiedNameUsageInspection */
/** @noinspection PhpUnusedAliasInspection */
namespace App {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\_MotorbikeCollection;
    use LaravelIdea\Helper\App\_MotorbikeQueryBuilder;
    use LaravelIdea\Helper\App\_UserCollection;
    use LaravelIdea\Helper\App\_UserQueryBuilder;
    use LaravelIdea\Helper\Illuminate\Notifications\_DatabaseNotificationCollection;
    use LaravelIdea\Helper\Illuminate\Notifications\_DatabaseNotificationQueryBuilder;

    /**
     * @property int $id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method _MotorbikeQueryBuilder newModelQuery()
     * @method _MotorbikeQueryBuilder newQuery()
     * @method static _MotorbikeQueryBuilder query()
     * @method static _MotorbikeCollection|Motorbike[] all()
     * @mixin _MotorbikeQueryBuilder
     */
    class Motorbike extends Model
    {
    }

    /**
     * @property int $id
     * @property string $name
     * @property string $email
     * @property Carbon|null $email_verified_at
     * @property string $password
     * @property string|null $remember_token
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _DatabaseNotificationCollection|DatabaseNotification[] $notifications
     * @method MorphToMany|_DatabaseNotificationQueryBuilder notifications()
     * @method _UserQueryBuilder newModelQuery()
     * @method _UserQueryBuilder newQuery()
     * @method static _UserQueryBuilder query()
     * @method static _UserCollection|User[] all()
     * @mixin _UserQueryBuilder
     */
    class User extends Model
    {
    }
}
namespace Illuminate\Notifications {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use LaravelIdea\Helper\Illuminate\Notifications\_DatabaseNotificationCollection;
    use LaravelIdea\Helper\Illuminate\Notifications\_DatabaseNotificationQueryBuilder;

    /**
     * @property Model $notifiable
     * @method MorphTo notifiable()
     * @method _DatabaseNotificationQueryBuilder newModelQuery()
     * @method _DatabaseNotificationQueryBuilder newQuery()
     * @method static _DatabaseNotificationQueryBuilder query()
     * @method static _DatabaseNotificationCollection|DatabaseNotification[] all()
     * @mixin _DatabaseNotificationQueryBuilder
     */
    class DatabaseNotification extends Model
    {
    }
}
namespace LaravelIdea\Helper {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Support\Collection;

    /**
     * @see \Illuminate\Database\Query\Builder::select
     * @method $this select(array $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::paginate
     * @method $this paginate(int $perPage = 15, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @see \Illuminate\Database\Query\Builder::addSelect
     * @method $this addSelect(array $column)
     * @see \Illuminate\Database\Concerns\BuildsQueries::when
     * @method $this when($value, callable $callback, callable|null $default = null)
     * @see \Illuminate\Database\Query\Builder::whereIn
     * @method $this whereIn(string $column, $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::whereJsonLength
     * @method $this whereJsonLength(string $column, $operator, $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::orWhereExists
     * @method $this orWhereExists(\Closure $callback, bool $not = false)
     * @see \Illuminate\Database\Query\Builder::orWhereNotIn
     * @method $this orWhereNotIn(string $column, $values)
     * @see \Illuminate\Database\Query\Builder::truncate
     * @method $this truncate()
     * @see \Illuminate\Database\Query\Builder::selectRaw
     * @method $this selectRaw(string $expression, array $bindings = [])
     * @see \Illuminate\Database\Query\Builder::insertOrIgnore
     * @method $this insertOrIgnore(array $values)
     * @see \Illuminate\Database\Query\Builder::lock
     * @method $this lock(bool|string $value = true)
     * @see \Illuminate\Database\Query\Builder::join
     * @method $this join(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null, string $type = 'inner', bool $where = false)
     * @see \Illuminate\Database\Query\Builder::unionAll
     * @method $this unionAll(\Closure|\Illuminate\Database\Query\Builder $query)
     * @see \Illuminate\Database\Query\Builder::whereMonth
     * @method $this whereMonth(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::having
     * @method $this having(string $column, null|string $operator = null, null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::orWhereNull
     * @method $this orWhereNull(string $column)
     * @see \Illuminate\Database\Query\Builder::whereNested
     * @method $this whereNested(\Closure $callback, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::joinWhere
     * @method $this joinWhere(string $table, \Closure|string $first, string $operator, string $second, string $type = 'inner')
     * @see \Illuminate\Database\Query\Builder::orWhereJsonContains
     * @method $this orWhereJsonContains(string $column, $value)
     * @see \Illuminate\Database\Query\Builder::orderBy
     * @method $this orderBy(\Closure|\Illuminate\Database\Query\Builder|Expression|string $column, string $direction = 'asc')
     * @see \Illuminate\Database\Query\Builder::raw
     * @method $this raw($value)
     * @see \Illuminate\Database\Query\Builder::orWhereRowValues
     * @method $this orWhereRowValues(array $columns, string $operator, array $values)
     * @see \Illuminate\Database\Concerns\BuildsQueries::each
     * @method $this each(callable $callback, int $count = 1000)
     * @see \Illuminate\Database\Query\Builder::setBindings
     * @method $this setBindings(array $bindings, string $type = 'where')
     * @see \Illuminate\Database\Query\Builder::orWhereJsonLength
     * @method $this orWhereJsonLength(string $column, $operator, $value = null)
     * @see \Illuminate\Database\Query\Builder::whereRowValues
     * @method $this whereRowValues(array $columns, string $operator, array $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::useWritePdo
     * @method $this useWritePdo()
     * @see \Illuminate\Database\Query\Builder::orWhereNotExists
     * @method $this orWhereNotExists(\Closure $callback)
     * @see \Illuminate\Database\Query\Builder::orWhereIntegerInRaw
     * @method $this orWhereIntegerInRaw(string $column, array|Arrayable $values)
     * @see \Illuminate\Database\Query\Builder::orWhereIn
     * @method $this orWhereIn(string $column, $values)
     * @see \Illuminate\Database\Query\Builder::newQuery
     * @method $this newQuery()
     * @see \Illuminate\Database\Query\Builder::rightJoinSub
     * @method $this rightJoinSub(\Closure|\Illuminate\Database\Query\Builder|string $query, string $as, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::crossJoin
     * @method $this crossJoin(string $table, \Closure|null|string $first = null, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::orderByDesc
     * @method $this orderByDesc(string $column)
     * @see \Illuminate\Database\Query\Builder::average
     * @method $this average(string $column)
     * @see \Illuminate\Database\Query\Builder::orWhereNotNull
     * @method $this orWhereNotNull(string $column)
     * @see \Illuminate\Database\Query\Builder::existsOr
     * @method $this existsOr(\Closure $callback)
     * @see \Illuminate\Database\Query\Builder::getProcessor
     * @method $this getProcessor()
     * @see \Illuminate\Database\Query\Builder::increment
     * @method $this increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Query\Builder::skip
     * @method $this skip(int $value)
     * @see \Illuminate\Database\Query\Builder::sum
     * @method $this sum(string $column)
     * @see \Illuminate\Database\Query\Builder::havingRaw
     * @method $this havingRaw(string $sql, array $bindings = [], string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::leftJoinWhere
     * @method $this leftJoinWhere(string $table, \Closure|string $first, string $operator, string $second)
     * @see \Illuminate\Database\Query\Builder::doesntExistOr
     * @method $this doesntExistOr(\Closure $callback)
     * @see \Illuminate\Database\Query\Builder::getRawBindings
     * @method $this getRawBindings()
     * @see \Illuminate\Database\Query\Builder::orWhereColumn
     * @method $this orWhereColumn(array|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::min
     * @method $this min(string $column)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method $this hasMacro(string $name)
     * @see \Illuminate\Database\Query\Builder::whereNotExists
     * @method $this whereNotExists(\Closure $callback, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::whereIntegerInRaw
     * @method $this whereIntegerInRaw(string $column, array|Arrayable $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Concerns\BuildsQueries::unless
     * @method $this unless($value, callable $callback, callable|null $default = null)
     * @see \Illuminate\Database\Query\Builder::whereDay
     * @method $this whereDay(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::get
     * @method $this get(array|string $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::whereNotIn
     * @method $this whereNotIn(string $column, $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::whereTime
     * @method $this whereTime(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::where
     * @method $this where(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::latest
     * @method $this latest(string $column = 'created_at')
     * @see \Illuminate\Database\Query\Builder::forNestedWhere
     * @method $this forNestedWhere()
     * @see \Illuminate\Database\Query\Builder::insertUsing
     * @method $this insertUsing(array $columns, \Closure|\Illuminate\Database\Query\Builder|string $query)
     * @see \Illuminate\Database\Query\Builder::rightJoinWhere
     * @method $this rightJoinWhere(string $table, \Closure|string $first, string $operator, string $second)
     * @see \Illuminate\Database\Query\Builder::max
     * @method $this max(string $column)
     * @see \Illuminate\Database\Query\Builder::whereExists
     * @method $this whereExists(\Closure $callback, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::inRandomOrder
     * @method $this inRandomOrder(string $seed = '')
     * @see \Illuminate\Database\Query\Builder::havingBetween
     * @method $this havingBetween(string $column, array $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::union
     * @method $this union(\Closure|\Illuminate\Database\Query\Builder $query, bool $all = false)
     * @see \Illuminate\Database\Query\Builder::groupBy
     * @method $this groupBy(array $groups)
     * @see \Illuminate\Database\Query\Builder::orWhereYear
     * @method $this orWhereYear(string $column, string $operator, \DateTimeInterface|int|null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::orWhereDay
     * @method $this orWhereDay(string $column, string $operator, \DateTimeInterface|null|string $value = null)
     * @see \Illuminate\Database\Concerns\BuildsQueries::chunkById
     * @method $this chunkById(int $count, callable $callback, null|string $column = null, null|string $alias = null)
     * @see \Illuminate\Database\Query\Builder::joinSub
     * @method $this joinSub(\Closure|\Illuminate\Database\Query\Builder|string $query, string $as, \Closure|string $first, null|string $operator = null, null|string $second = null, string $type = 'inner', bool $where = false)
     * @see \Illuminate\Database\Query\Builder::whereDate
     * @method $this whereDate(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::whereJsonDoesntContain
     * @method $this whereJsonDoesntContain(string $column, $value, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::oldest
     * @method $this oldest(string $column = 'created_at')
     * @see \Illuminate\Database\Query\Builder::decrement
     * @method $this decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Query\Builder::forPageAfterId
     * @method $this forPageAfterId(int $perPage = 15, int|null $lastId = 0, string $column = 'id')
     * @see \Illuminate\Database\Query\Builder::forPage
     * @method $this forPage(int $page, int $perPage = 15)
     * @see \Illuminate\Database\Query\Builder::exists
     * @method $this exists()
     * @see \Illuminate\Support\Traits\Macroable::macroCall
     * @method $this macroCall(string $method, array $parameters)
     * @see \Illuminate\Database\Query\Builder::pluck
     * @method $this pluck(string $column, null|string $key = null)
     * @see \Illuminate\Database\Query\Builder::selectSub
     * @method $this selectSub(\Closure|string $query, string $as)
     * @see \Illuminate\Database\Concerns\BuildsQueries::first
     * @method $this first(array|string $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::dd
     * @method $this dd()
     * @see \Illuminate\Database\Query\Builder::whereColumn
     * @method $this whereColumn(array|string $first, null|string $operator = null, null|string $second = null, null|string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::numericAggregate
     * @method $this numericAggregate(string $function, array $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::whereNull
     * @method $this whereNull(array|string $columns, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::prepareValueAndOperator
     * @method $this prepareValueAndOperator(string $value, string $operator, bool $useDefault = false)
     * @see \Illuminate\Database\Query\Builder::whereNotBetween
     * @method $this whereNotBetween(string $column, array $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::getConnection
     * @method $this getConnection()
     * @see \Illuminate\Database\Query\Builder::mergeBindings
     * @method $this mergeBindings(\Illuminate\Database\Query\Builder $query)
     * @see \Illuminate\Database\Query\Builder::whereIntegerNotInRaw
     * @method $this whereIntegerNotInRaw(string $column, array|Arrayable $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::orWhereJsonDoesntContain
     * @method $this orWhereJsonDoesntContain(string $column, $value)
     * @see \Illuminate\Database\Query\Builder::orWhereRaw
     * @method $this orWhereRaw(string $sql, $bindings = [])
     * @see \Illuminate\Database\Query\Builder::leftJoinSub
     * @method $this leftJoinSub(\Closure|\Illuminate\Database\Query\Builder|string $query, string $as, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::find
     * @method $this find(int|string $id, array $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::limit
     * @method $this limit(int $value)
     * @see \Illuminate\Database\Query\Builder::whereJsonContains
     * @method $this whereJsonContains(string $column, $value, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::from
     * @method $this from(\Closure|\Illuminate\Database\Query\Builder|string $table, null|string $as = null)
     * @see \Illuminate\Database\Query\Builder::insertGetId
     * @method $this insertGetId(array $values, null|string $sequence = null)
     * @see \Illuminate\Database\Query\Builder::whereBetween
     * @method $this whereBetween(string $column, array $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::mergeWheres
     * @method $this mergeWheres(array $wheres, array $bindings)
     * @see \Illuminate\Database\Query\Builder::sharedLock
     * @method $this sharedLock()
     * @see \Illuminate\Database\Query\Builder::orderByRaw
     * @method $this orderByRaw(string $sql, array $bindings = [])
     * @see \Illuminate\Database\Concerns\BuildsQueries::tap
     * @method $this tap(callable $callback)
     * @see \Illuminate\Database\Query\Builder::simplePaginate
     * @method $this simplePaginate(int $perPage = 15, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @see \Illuminate\Database\Query\Builder::doesntExist
     * @method $this doesntExist()
     * @see \Illuminate\Database\Query\Builder::offset
     * @method $this offset(int $value)
     * @see \Illuminate\Database\Query\Builder::orWhereMonth
     * @method $this orWhereMonth(string $column, string $operator, \DateTimeInterface|null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::whereNotNull
     * @method $this whereNotNull(array|string $columns, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::count
     * @method $this count(string $columns = '*')
     * @see \Illuminate\Database\Query\Builder::orWhereNotBetween
     * @method $this orWhereNotBetween(string $column, array $values)
     * @see \Illuminate\Database\Query\Builder::fromRaw
     * @method $this fromRaw(string $expression, $bindings = [])
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method $this mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Database\Query\Builder::take
     * @method $this take(int $value)
     * @see \Illuminate\Database\Query\Builder::updateOrInsert
     * @method $this updateOrInsert(array $attributes, array $values = [])
     * @see \Illuminate\Database\Query\Builder::addNestedWhereQuery
     * @method $this addNestedWhereQuery($query, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::cursor
     * @method $this cursor()
     * @see \Illuminate\Database\Query\Builder::cloneWithout
     * @method $this cloneWithout(array $properties)
     * @see \Illuminate\Database\Query\Builder::rightJoin
     * @method $this rightJoin(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::fromSub
     * @method $this fromSub(\Closure|\Illuminate\Database\Query\Builder|string $query, string $as)
     * @see \Illuminate\Database\Query\Builder::leftJoin
     * @method $this leftJoin(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::insert
     * @method $this insert(array $values)
     * @see \Illuminate\Database\Query\Builder::distinct
     * @method $this distinct()
     * @see \Illuminate\Database\Query\Builder::update
     * @method $this update(array $values)
     * @see \Illuminate\Database\Concerns\BuildsQueries::chunk
     * @method $this chunk(int $count, callable $callback)
     * @see \Illuminate\Database\Query\Builder::reorder
     * @method $this reorder(null|string $column = null, string $direction = 'asc')
     * @see \Illuminate\Database\Query\Builder::whereYear
     * @method $this whereYear(string $column, string $operator, \DateTimeInterface|int|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::delete
     * @method $this delete($id = null)
     * @see \Illuminate\Database\Query\Builder::getCountForPagination
     * @method $this getCountForPagination(array $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::groupByRaw
     * @method $this groupByRaw(string $sql, array $bindings = [])
     * @see \Illuminate\Database\Query\Builder::orWhereIntegerNotInRaw
     * @method $this orWhereIntegerNotInRaw(string $column, array|Arrayable $values)
     * @see \Illuminate\Database\Query\Builder::aggregate
     * @method $this aggregate(string $function, array $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::orWhereDate
     * @method $this orWhereDate(string $column, string $operator, \DateTimeInterface|null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::avg
     * @method $this avg(string $column)
     * @see \Illuminate\Database\Query\Builder::addBinding
     * @method $this addBinding($value, string $type = 'where')
     * @see \Illuminate\Database\Query\Builder::getGrammar
     * @method $this getGrammar()
     * @see \Illuminate\Database\Query\Builder::lockForUpdate
     * @method $this lockForUpdate()
     * @see \Illuminate\Database\Concerns\BuildsQueries::eachById
     * @method $this eachById(callable $callback, int $count = 1000, null|string $column = null, null|string $alias = null)
     * @see \Illuminate\Database\Query\Builder::dump
     * @method $this dump()
     * @see \Illuminate\Database\Query\Builder::implode
     * @method $this implode(string $column, string $glue = '')
     * @see \Illuminate\Database\Query\Builder::value
     * @method $this value(string $column)
     * @see \Illuminate\Database\Query\Builder::cloneWithoutBindings
     * @method $this cloneWithoutBindings(array $except)
     * @see \Illuminate\Database\Query\Builder::addWhereExistsQuery
     * @method $this addWhereExistsQuery(\Illuminate\Database\Query\Builder $query, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method $this macro(string $name, callable|object $macro)
     * @see \Illuminate\Database\Query\Builder::whereRaw
     * @method $this whereRaw(string $sql, $bindings = [], string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::toSql
     * @method $this toSql()
     * @see \Illuminate\Database\Query\Builder::orHaving
     * @method $this orHaving(string $column, null|string $operator = null, null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::orHavingRaw
     * @method $this orHavingRaw(string $sql, array $bindings = [])
     * @see \Illuminate\Database\Query\Builder::getBindings
     * @method $this getBindings()
     * @see \Illuminate\Database\Query\Builder::forPageBeforeId
     * @method $this forPageBeforeId(int $perPage = 15, int|null $lastId = 0, string $column = 'id')
     * @see \Illuminate\Database\Query\Builder::orWhereTime
     * @method $this orWhereTime(string $column, string $operator, \DateTimeInterface|null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::orWhereBetween
     * @method $this orWhereBetween(string $column, array $values)
     * @see \Illuminate\Database\Query\Builder::dynamicWhere
     * @method $this dynamicWhere(string $method, array $parameters)
     * @see \Illuminate\Database\Query\Builder::orWhere
     * @method $this orWhere(array|\Closure|string $column, $operator = null, $value = null)
     */
    class _BaseBuilder extends Builder
    {
    }

    /**
     * @method Collection mapSpread(callable $callback)
     * @method Collection mapWithKeys(callable $callback)
     * @method Collection zip(array $items)
     * @method Collection partition(callable|string $key, $operator = null, $value = null)
     * @method Collection mapInto(string $class)
     * @method Collection mapToGroups(callable $callback)
     * @method Collection map(callable $callback)
     * @method Collection groupBy(array|callable|string $groupBy, bool $preserveKeys = false)
     * @method Collection pluck(array|string $value, null|string $key = null)
     * @method Collection pad(int $size, $value)
     * @method Collection split(int $numberOfGroups)
     * @method Collection combine($values)
     * @method Collection countBy(callable|null $callback = null)
     * @method Collection mapToDictionary(callable $callback)
     * @method Collection keys()
     * @method Collection transform(callable $callback)
     * @method Collection flatMap(callable $callback)
     * @method Collection collapse()
     */
    class _BaseCollection extends Collection
    {
    }
}
namespace LaravelIdea\Helper\App {

    use App\Motorbike;
    use App\User;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Notifications\Notification;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method Motorbike shift()
     * @method Motorbike pop()
     * @method Motorbike get($key, $default = null)
     * @method Motorbike pull($key, $default = null)
     * @method Motorbike first(callable $callback = null, $default = null)
     * @method Motorbike firstWhere(string $key, $operator = null, $value = null)
     * @method Motorbike[] all()
     * @method Motorbike last(callable $callback = null, $default = null)
     * @property-read _MotorbikeCollectionProxy $keyBy
     * @property-read _MotorbikeCollectionProxy $max
     * @property-read _MotorbikeCollectionProxy $partition
     * @property-read _MotorbikeCollectionProxy $average
     * @property-read _MotorbikeCollectionProxy $flatMap
     * @property-read _MotorbikeCollectionProxy $each
     * @property-read _MotorbikeCollectionProxy $some
     * @property-read _MotorbikeCollectionProxy $map
     * @property-read _MotorbikeCollectionProxy $sortByDesc
     * @property-read _MotorbikeCollectionProxy $filter
     * @property-read _MotorbikeCollectionProxy $avg
     * @property-read _MotorbikeCollectionProxy $unique
     * @property-read _MotorbikeCollectionProxy $first
     * @property-read _MotorbikeCollectionProxy $min
     * @property-read _MotorbikeCollectionProxy $groupBy
     * @property-read _MotorbikeCollectionProxy $reject
     * @property-read _MotorbikeCollectionProxy $sortBy
     * @property-read _MotorbikeCollectionProxy $contains
     * @property-read _MotorbikeCollectionProxy $sum
     * @property-read _MotorbikeCollectionProxy $until
     * @property-read _MotorbikeCollectionProxy $every
     */
    class _MotorbikeCollection extends _BaseCollection
    {
        /**
         * @param  int  $size
         * @return Motorbike[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _MotorbikeCollection|mixed $id
     * @property _MotorbikeCollection|mixed $created_at
     * @property _MotorbikeCollection|mixed $updated_at
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _MotorbikeCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _MotorbikeCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _MotorbikeCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _MotorbikeCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _MotorbikeCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _MotorbikeCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _MotorbikeCollection delete()
     */
    class _MotorbikeCollectionProxy
    {
    }

    /**
     * @method _MotorbikeQueryBuilder whereId($value)
     * @method _MotorbikeQueryBuilder whereCreatedAt($value)
     * @method _MotorbikeQueryBuilder whereUpdatedAt($value)
     * @method Motorbike create(array $attributes = [])
     * @method _MotorbikeCollection|Motorbike[] cursor()
     * @method Motorbike|null find($id, array $columns = ['*'])
     * @method _MotorbikeCollection|Motorbike[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Motorbike findOrFail($id, array $columns = ['*'])
     * @method _MotorbikeCollection|Motorbike[] findOrNew($id, array $columns = ['*'])
     * @method Motorbike first(array|string $columns = ['*'])
     * @method Motorbike firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Motorbike firstOrCreate(array $attributes, array $values = [])
     * @method Motorbike firstOrFail(array $columns = ['*'])
     * @method Motorbike firstOrNew(array $attributes = [], array $values = [])
     * @method Motorbike firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Motorbike forceCreate(array $attributes)
     * @method _MotorbikeCollection|Motorbike[] fromQuery(string $query, array $bindings = [])
     * @method _MotorbikeCollection|Motorbike[] get(array|string $columns = ['*'])
     * @method Motorbike getModel()
     * @method Motorbike[] getModels(array|string $columns = ['*'])
     * @method _MotorbikeCollection|Motorbike[] hydrate(array $items)
     * @method Motorbike make(array $attributes = [])
     * @method Motorbike newModelInstance(array $attributes = [])
     * @method Motorbike updateOrCreate(array $attributes, array $values = [])
     */
    class _MotorbikeQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method User shift()
     * @method User pop()
     * @method User get($key, $default = null)
     * @method User pull($key, $default = null)
     * @method User first(callable $callback = null, $default = null)
     * @method User firstWhere(string $key, $operator = null, $value = null)
     * @method User[] all()
     * @method User last(callable $callback = null, $default = null)
     * @property-read _UserCollectionProxy $keyBy
     * @property-read _UserCollectionProxy $max
     * @property-read _UserCollectionProxy $partition
     * @property-read _UserCollectionProxy $average
     * @property-read _UserCollectionProxy $flatMap
     * @property-read _UserCollectionProxy $each
     * @property-read _UserCollectionProxy $some
     * @property-read _UserCollectionProxy $map
     * @property-read _UserCollectionProxy $sortByDesc
     * @property-read _UserCollectionProxy $filter
     * @property-read _UserCollectionProxy $avg
     * @property-read _UserCollectionProxy $unique
     * @property-read _UserCollectionProxy $first
     * @property-read _UserCollectionProxy $min
     * @property-read _UserCollectionProxy $groupBy
     * @property-read _UserCollectionProxy $reject
     * @property-read _UserCollectionProxy $sortBy
     * @property-read _UserCollectionProxy $contains
     * @property-read _UserCollectionProxy $sum
     * @property-read _UserCollectionProxy $until
     * @property-read _UserCollectionProxy $every
     */
    class _UserCollection extends _BaseCollection
    {
        /**
         * @param  int  $size
         * @return User[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _UserCollection|mixed $id
     * @property _UserCollection|mixed $name
     * @property _UserCollection|mixed $email
     * @property _UserCollection|mixed $email_verified_at
     * @property _UserCollection|mixed $password
     * @property _UserCollection|mixed $remember_token
     * @property _UserCollection|mixed $created_at
     * @property _UserCollection|mixed $updated_at
     * @see \Illuminate\Notifications\RoutesNotifications::notifyNow
     * @method _UserCollection notifyNow($instance, array $channels = null)
     * @see \Illuminate\Notifications\RoutesNotifications::notify
     * @method _UserCollection notify($instance)
     * @see \Illuminate\Notifications\RoutesNotifications::routeNotificationFor
     * @method _UserCollection routeNotificationFor(string $driver, Notification|null $notification = null)
     * @see \Illuminate\Notifications\HasDatabaseNotifications::readNotifications
     * @method _UserCollection readNotifications()
     * @see \Illuminate\Notifications\HasDatabaseNotifications::unreadNotifications
     * @method _UserCollection unreadNotifications()
     * @see \Illuminate\Auth\MustVerifyEmail::sendEmailVerificationNotification
     * @method _UserCollection sendEmailVerificationNotification()
     * @see \Illuminate\Auth\MustVerifyEmail::getEmailForVerification
     * @method _UserCollection getEmailForVerification()
     * @see \Illuminate\Auth\MustVerifyEmail::markEmailAsVerified
     * @method _UserCollection markEmailAsVerified()
     * @see \Illuminate\Auth\MustVerifyEmail::hasVerifiedEmail
     * @method _UserCollection hasVerifiedEmail()
     * @see \Illuminate\Auth\Authenticatable::getRememberTokenName
     * @method _UserCollection getRememberTokenName()
     * @see \Illuminate\Auth\Authenticatable::getAuthPassword
     * @method _UserCollection getAuthPassword()
     * @see \Illuminate\Auth\Authenticatable::getAuthIdentifier
     * @method _UserCollection getAuthIdentifier()
     * @see \Illuminate\Auth\Authenticatable::getRememberToken
     * @method _UserCollection getRememberToken()
     * @see \Illuminate\Auth\Authenticatable::setRememberToken
     * @method _UserCollection setRememberToken(string $value)
     * @see \Illuminate\Auth\Authenticatable::getAuthIdentifierName
     * @method _UserCollection getAuthIdentifierName()
     * @see \Illuminate\Foundation\Auth\Access\Authorizable::can
     * @method _UserCollection can(iterable|string $abilities, array $arguments = [])
     * @see \Illuminate\Foundation\Auth\Access\Authorizable::cant
     * @method _UserCollection cant(iterable|string $abilities, array $arguments = [])
     * @see \Illuminate\Foundation\Auth\Access\Authorizable::cannot
     * @method _UserCollection cannot(iterable|string $abilities, array $arguments = [])
     * @see \Illuminate\Auth\Passwords\CanResetPassword::sendPasswordResetNotification
     * @method _UserCollection sendPasswordResetNotification(string $token)
     * @see \Illuminate\Auth\Passwords\CanResetPassword::getEmailForPasswordReset
     * @method _UserCollection getEmailForPasswordReset()
     * @see \App\User::newQuery
     * @method _UserCollection newQuery()
     * @see \App\User::newModelQuery
     * @method _UserCollection newModelQuery()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _UserCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _UserCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _UserCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _UserCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _UserCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _UserCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _UserCollection delete()
     */
    class _UserCollectionProxy
    {
    }

    /**
     * @method _UserQueryBuilder whereId($value)
     * @method _UserQueryBuilder whereName($value)
     * @method _UserQueryBuilder whereEmail($value)
     * @method _UserQueryBuilder whereEmailVerifiedAt($value)
     * @method _UserQueryBuilder wherePassword($value)
     * @method _UserQueryBuilder whereRememberToken($value)
     * @method _UserQueryBuilder whereCreatedAt($value)
     * @method _UserQueryBuilder whereUpdatedAt($value)
     * @method User create(array $attributes = [])
     * @method _UserCollection|User[] cursor()
     * @method User|null find($id, array $columns = ['*'])
     * @method _UserCollection|User[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method User findOrFail($id, array $columns = ['*'])
     * @method _UserCollection|User[] findOrNew($id, array $columns = ['*'])
     * @method User first(array|string $columns = ['*'])
     * @method User firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method User firstOrCreate(array $attributes, array $values = [])
     * @method User firstOrFail(array $columns = ['*'])
     * @method User firstOrNew(array $attributes = [], array $values = [])
     * @method User firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method User forceCreate(array $attributes)
     * @method _UserCollection|User[] fromQuery(string $query, array $bindings = [])
     * @method _UserCollection|User[] get(array|string $columns = ['*'])
     * @method User getModel()
     * @method User[] getModels(array|string $columns = ['*'])
     * @method _UserCollection|User[] hydrate(array $items)
     * @method User make(array $attributes = [])
     * @method User newModelInstance(array $attributes = [])
     * @method User updateOrCreate(array $attributes, array $values = [])
     */
    class _UserQueryBuilder extends _BaseBuilder
    {
    }
}
namespace LaravelIdea\Helper\Illuminate\Notifications {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Notifications\DatabaseNotification;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method DatabaseNotification shift()
     * @method DatabaseNotification pop()
     * @method DatabaseNotification get($key, $default = null)
     * @method DatabaseNotification pull($key, $default = null)
     * @method DatabaseNotification first(callable $callback = null, $default = null)
     * @method DatabaseNotification firstWhere(string $key, $operator = null, $value = null)
     * @method DatabaseNotification[] all()
     * @method DatabaseNotification last(callable $callback = null, $default = null)
     * @property-read _DatabaseNotificationCollectionProxy $keyBy
     * @property-read _DatabaseNotificationCollectionProxy $max
     * @property-read _DatabaseNotificationCollectionProxy $partition
     * @property-read _DatabaseNotificationCollectionProxy $average
     * @property-read _DatabaseNotificationCollectionProxy $flatMap
     * @property-read _DatabaseNotificationCollectionProxy $each
     * @property-read _DatabaseNotificationCollectionProxy $some
     * @property-read _DatabaseNotificationCollectionProxy $map
     * @property-read _DatabaseNotificationCollectionProxy $sortByDesc
     * @property-read _DatabaseNotificationCollectionProxy $filter
     * @property-read _DatabaseNotificationCollectionProxy $avg
     * @property-read _DatabaseNotificationCollectionProxy $unique
     * @property-read _DatabaseNotificationCollectionProxy $first
     * @property-read _DatabaseNotificationCollectionProxy $min
     * @property-read _DatabaseNotificationCollectionProxy $groupBy
     * @property-read _DatabaseNotificationCollectionProxy $reject
     * @property-read _DatabaseNotificationCollectionProxy $sortBy
     * @property-read _DatabaseNotificationCollectionProxy $contains
     * @property-read _DatabaseNotificationCollectionProxy $sum
     * @property-read _DatabaseNotificationCollectionProxy $until
     * @property-read _DatabaseNotificationCollectionProxy $every
     */
    class _DatabaseNotificationCollection extends _BaseCollection
    {
        /**
         * @param  int  $size
         * @return DatabaseNotification[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _DatabaseNotificationCollection|mixed $notifiable
     * @see \Illuminate\Notifications\DatabaseNotification::newQuery
     * @method _DatabaseNotificationCollection newQuery()
     * @see \Illuminate\Notifications\DatabaseNotification::newModelQuery
     * @method _DatabaseNotificationCollection newModelQuery()
     * @see \Illuminate\Notifications\DatabaseNotification::markAsRead
     * @method _DatabaseNotificationCollection markAsRead()
     * @see \Illuminate\Notifications\DatabaseNotification::read
     * @method _DatabaseNotificationCollection read()
     * @see \Illuminate\Notifications\DatabaseNotification::newCollection
     * @method _DatabaseNotificationCollection newCollection(array $models = [])
     * @see \Illuminate\Notifications\DatabaseNotification::markAsUnread
     * @method _DatabaseNotificationCollection markAsUnread()
     * @see \Illuminate\Notifications\DatabaseNotification::unread
     * @method _DatabaseNotificationCollection unread()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _DatabaseNotificationCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _DatabaseNotificationCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _DatabaseNotificationCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _DatabaseNotificationCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _DatabaseNotificationCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _DatabaseNotificationCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _DatabaseNotificationCollection delete()
     */
    class _DatabaseNotificationCollectionProxy
    {
    }

    /**
     * @method DatabaseNotification create(array $attributes = [])
     * @method _DatabaseNotificationCollection|DatabaseNotification[] cursor()
     * @method DatabaseNotification|null find($id, array $columns = ['*'])
     * @method _DatabaseNotificationCollection|DatabaseNotification[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method DatabaseNotification findOrFail($id, array $columns = ['*'])
     * @method _DatabaseNotificationCollection|DatabaseNotification[] findOrNew($id, array $columns = ['*'])
     * @method DatabaseNotification first(array|string $columns = ['*'])
     * @method DatabaseNotification firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method DatabaseNotification firstOrCreate(array $attributes, array $values = [])
     * @method DatabaseNotification firstOrFail(array $columns = ['*'])
     * @method DatabaseNotification firstOrNew(array $attributes = [], array $values = [])
     * @method DatabaseNotification firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method DatabaseNotification forceCreate(array $attributes)
     * @method _DatabaseNotificationCollection|DatabaseNotification[] fromQuery(string $query, array $bindings = [])
     * @method _DatabaseNotificationCollection|DatabaseNotification[] get(array|string $columns = ['*'])
     * @method DatabaseNotification getModel()
     * @method DatabaseNotification[] getModels(array|string $columns = ['*'])
     * @method _DatabaseNotificationCollection|DatabaseNotification[] hydrate(array $items)
     * @method DatabaseNotification make(array $attributes = [])
     * @method DatabaseNotification newModelInstance(array $attributes = [])
     * @method DatabaseNotification updateOrCreate(array $attributes, array $values = [])
     */
    class _DatabaseNotificationQueryBuilder extends _BaseBuilder
    {
    }
}
