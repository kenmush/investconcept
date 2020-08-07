<?php
/** @noinspection PhpUndefinedClassInspection */
/** @noinspection PhpFullyQualifiedNameUsageInspection */
/** @noinspection PhpUnusedAliasInspection */
namespace App {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\_AssetCollection;
    use LaravelIdea\Helper\App\_AssetQueryBuilder;
    use LaravelIdea\Helper\App\_MobileIrrigationCollection;
    use LaravelIdea\Helper\App\_MobileIrrigationQueryBuilder;
    use LaravelIdea\Helper\App\_MotorbikeCollection;
    use LaravelIdea\Helper\App\_MotorbikeQueryBuilder;
    use LaravelIdea\Helper\App\_RawWateratmCollection;
    use LaravelIdea\Helper\App\_RawWateratmQueryBuilder;
    use LaravelIdea\Helper\App\_SmartMeterCollection;
    use LaravelIdea\Helper\App\_SmartMeterQueryBuilder;
    use LaravelIdea\Helper\App\_UserCollection;
    use LaravelIdea\Helper\App\_UserQueryBuilder;
    use LaravelIdea\Helper\Illuminate\Notifications\_DatabaseNotificationCollection;
    use LaravelIdea\Helper\Illuminate\Notifications\_DatabaseNotificationQueryBuilder;

    /**
     * @property int $id
     * @property string $type
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method _AssetQueryBuilder newModelQuery()
     * @method _AssetQueryBuilder newQuery()
     * @method static _AssetQueryBuilder query()
     * @method static _AssetCollection|Asset[] all()
     * @mixin _AssetQueryBuilder
     */
    class Asset extends Model
    {
    }

    /**
     * @property int $id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method _MobileIrrigationQueryBuilder newModelQuery()
     * @method _MobileIrrigationQueryBuilder newQuery()
     * @method static _MobileIrrigationQueryBuilder query()
     * @method static _MobileIrrigationCollection|MobileIrrigation[] all()
     * @mixin _MobileIrrigationQueryBuilder
     */
    class MobileIrrigation extends Model
    {
    }

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
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method _RawWateratmQueryBuilder newModelQuery()
     * @method _RawWateratmQueryBuilder newQuery()
     * @method static _RawWateratmQueryBuilder query()
     * @method static _RawWateratmCollection|RawWateratm[] all()
     * @mixin _RawWateratmQueryBuilder
     */
    class RawWateratm extends Model
    {
    }

    /**
     * @property int $id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method _SmartMeterQueryBuilder newModelQuery()
     * @method _SmartMeterQueryBuilder newQuery()
     * @method static _SmartMeterQueryBuilder query()
     * @method static _SmartMeterCollection|SmartMeter[] all()
     * @mixin _SmartMeterQueryBuilder
     */
    class SmartMeter extends Model
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
     * @property string|null $weight
     * @property string $restricted
     * @property array|null $meta
     * @property Carbon|null $deleted_at
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

    use App\Asset;
    use App\MobileIrrigation;
    use App\Motorbike;
    use App\RawWateratm;
    use App\SmartMeter;
    use App\User;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Notifications\Notification;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method Asset shift()
     * @method Asset pop()
     * @method Asset get($key, $default = null)
     * @method Asset pull($key, $default = null)
     * @method Asset first(callable $callback = null, $default = null)
     * @method Asset firstWhere(string $key, $operator = null, $value = null)
     * @method Asset[] all()
     * @method Asset last(callable $callback = null, $default = null)
     * @property-read _AssetCollectionProxy $keyBy
     * @property-read _AssetCollectionProxy $max
     * @property-read _AssetCollectionProxy $partition
     * @property-read _AssetCollectionProxy $average
     * @property-read _AssetCollectionProxy $flatMap
     * @property-read _AssetCollectionProxy $each
     * @property-read _AssetCollectionProxy $some
     * @property-read _AssetCollectionProxy $map
     * @property-read _AssetCollectionProxy $sortByDesc
     * @property-read _AssetCollectionProxy $filter
     * @property-read _AssetCollectionProxy $avg
     * @property-read _AssetCollectionProxy $unique
     * @property-read _AssetCollectionProxy $first
     * @property-read _AssetCollectionProxy $min
     * @property-read _AssetCollectionProxy $groupBy
     * @property-read _AssetCollectionProxy $reject
     * @property-read _AssetCollectionProxy $sortBy
     * @property-read _AssetCollectionProxy $contains
     * @property-read _AssetCollectionProxy $sum
     * @property-read _AssetCollectionProxy $until
     * @property-read _AssetCollectionProxy $every
     */
    class _AssetCollection extends _BaseCollection
    {
        /**
         * @param  int  $size
         * @return Asset[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _AssetCollection|mixed $id
     * @property _AssetCollection|mixed $type
     * @property _AssetCollection|mixed $created_at
     * @property _AssetCollection|mixed $updated_at
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _AssetCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _AssetCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _AssetCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _AssetCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _AssetCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _AssetCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _AssetCollection delete()
     */
    class _AssetCollectionProxy
    {
    }

    /**
     * @method _AssetQueryBuilder whereId($value)
     * @method _AssetQueryBuilder whereType($value)
     * @method _AssetQueryBuilder whereCreatedAt($value)
     * @method _AssetQueryBuilder whereUpdatedAt($value)
     * @method Asset create(array $attributes = [])
     * @method _AssetCollection|Asset[] cursor()
     * @method Asset|null find($id, array $columns = ['*'])
     * @method _AssetCollection|Asset[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Asset findOrFail($id, array $columns = ['*'])
     * @method _AssetCollection|Asset[] findOrNew($id, array $columns = ['*'])
     * @method Asset first(array|string $columns = ['*'])
     * @method Asset firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Asset firstOrCreate(array $attributes, array $values = [])
     * @method Asset firstOrFail(array $columns = ['*'])
     * @method Asset firstOrNew(array $attributes = [], array $values = [])
     * @method Asset firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Asset forceCreate(array $attributes)
     * @method _AssetCollection|Asset[] fromQuery(string $query, array $bindings = [])
     * @method _AssetCollection|Asset[] get(array|string $columns = ['*'])
     * @method Asset getModel()
     * @method Asset[] getModels(array|string $columns = ['*'])
     * @method _AssetCollection|Asset[] hydrate(array $items)
     * @method Asset make(array $attributes = [])
     * @method Asset newModelInstance(array $attributes = [])
     * @method Asset updateOrCreate(array $attributes, array $values = [])
     */
    class _AssetQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method MobileIrrigation shift()
     * @method MobileIrrigation pop()
     * @method MobileIrrigation get($key, $default = null)
     * @method MobileIrrigation pull($key, $default = null)
     * @method MobileIrrigation first(callable $callback = null, $default = null)
     * @method MobileIrrigation firstWhere(string $key, $operator = null, $value = null)
     * @method MobileIrrigation[] all()
     * @method MobileIrrigation last(callable $callback = null, $default = null)
     * @property-read _MobileIrrigationCollectionProxy $keyBy
     * @property-read _MobileIrrigationCollectionProxy $max
     * @property-read _MobileIrrigationCollectionProxy $partition
     * @property-read _MobileIrrigationCollectionProxy $average
     * @property-read _MobileIrrigationCollectionProxy $flatMap
     * @property-read _MobileIrrigationCollectionProxy $each
     * @property-read _MobileIrrigationCollectionProxy $some
     * @property-read _MobileIrrigationCollectionProxy $map
     * @property-read _MobileIrrigationCollectionProxy $sortByDesc
     * @property-read _MobileIrrigationCollectionProxy $filter
     * @property-read _MobileIrrigationCollectionProxy $avg
     * @property-read _MobileIrrigationCollectionProxy $unique
     * @property-read _MobileIrrigationCollectionProxy $first
     * @property-read _MobileIrrigationCollectionProxy $min
     * @property-read _MobileIrrigationCollectionProxy $groupBy
     * @property-read _MobileIrrigationCollectionProxy $reject
     * @property-read _MobileIrrigationCollectionProxy $sortBy
     * @property-read _MobileIrrigationCollectionProxy $contains
     * @property-read _MobileIrrigationCollectionProxy $sum
     * @property-read _MobileIrrigationCollectionProxy $until
     * @property-read _MobileIrrigationCollectionProxy $every
     */
    class _MobileIrrigationCollection extends _BaseCollection
    {
        /**
         * @param  int  $size
         * @return MobileIrrigation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _MobileIrrigationCollection|mixed $id
     * @property _MobileIrrigationCollection|mixed $created_at
     * @property _MobileIrrigationCollection|mixed $updated_at
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _MobileIrrigationCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _MobileIrrigationCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _MobileIrrigationCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _MobileIrrigationCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _MobileIrrigationCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _MobileIrrigationCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _MobileIrrigationCollection delete()
     */
    class _MobileIrrigationCollectionProxy
    {
    }

    /**
     * @method _MobileIrrigationQueryBuilder whereId($value)
     * @method _MobileIrrigationQueryBuilder whereCreatedAt($value)
     * @method _MobileIrrigationQueryBuilder whereUpdatedAt($value)
     * @method MobileIrrigation create(array $attributes = [])
     * @method _MobileIrrigationCollection|MobileIrrigation[] cursor()
     * @method MobileIrrigation|null find($id, array $columns = ['*'])
     * @method _MobileIrrigationCollection|MobileIrrigation[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method MobileIrrigation findOrFail($id, array $columns = ['*'])
     * @method _MobileIrrigationCollection|MobileIrrigation[] findOrNew($id, array $columns = ['*'])
     * @method MobileIrrigation first(array|string $columns = ['*'])
     * @method MobileIrrigation firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method MobileIrrigation firstOrCreate(array $attributes, array $values = [])
     * @method MobileIrrigation firstOrFail(array $columns = ['*'])
     * @method MobileIrrigation firstOrNew(array $attributes = [], array $values = [])
     * @method MobileIrrigation firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method MobileIrrigation forceCreate(array $attributes)
     * @method _MobileIrrigationCollection|MobileIrrigation[] fromQuery(string $query, array $bindings = [])
     * @method _MobileIrrigationCollection|MobileIrrigation[] get(array|string $columns = ['*'])
     * @method MobileIrrigation getModel()
     * @method MobileIrrigation[] getModels(array|string $columns = ['*'])
     * @method _MobileIrrigationCollection|MobileIrrigation[] hydrate(array $items)
     * @method MobileIrrigation make(array $attributes = [])
     * @method MobileIrrigation newModelInstance(array $attributes = [])
     * @method MobileIrrigation updateOrCreate(array $attributes, array $values = [])
     */
    class _MobileIrrigationQueryBuilder extends _BaseBuilder
    {
    }

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
     * @see \App\Motorbike::newQuery
     * @method _MotorbikeCollection newQuery()
     * @see \App\Motorbike::newModelQuery
     * @method _MotorbikeCollection newModelQuery()
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
     * @method RawWateratm shift()
     * @method RawWateratm pop()
     * @method RawWateratm get($key, $default = null)
     * @method RawWateratm pull($key, $default = null)
     * @method RawWateratm first(callable $callback = null, $default = null)
     * @method RawWateratm firstWhere(string $key, $operator = null, $value = null)
     * @method RawWateratm[] all()
     * @method RawWateratm last(callable $callback = null, $default = null)
     * @property-read _RawWateratmCollectionProxy $keyBy
     * @property-read _RawWateratmCollectionProxy $max
     * @property-read _RawWateratmCollectionProxy $partition
     * @property-read _RawWateratmCollectionProxy $average
     * @property-read _RawWateratmCollectionProxy $flatMap
     * @property-read _RawWateratmCollectionProxy $each
     * @property-read _RawWateratmCollectionProxy $some
     * @property-read _RawWateratmCollectionProxy $map
     * @property-read _RawWateratmCollectionProxy $sortByDesc
     * @property-read _RawWateratmCollectionProxy $filter
     * @property-read _RawWateratmCollectionProxy $avg
     * @property-read _RawWateratmCollectionProxy $unique
     * @property-read _RawWateratmCollectionProxy $first
     * @property-read _RawWateratmCollectionProxy $min
     * @property-read _RawWateratmCollectionProxy $groupBy
     * @property-read _RawWateratmCollectionProxy $reject
     * @property-read _RawWateratmCollectionProxy $sortBy
     * @property-read _RawWateratmCollectionProxy $contains
     * @property-read _RawWateratmCollectionProxy $sum
     * @property-read _RawWateratmCollectionProxy $until
     * @property-read _RawWateratmCollectionProxy $every
     */
    class _RawWateratmCollection extends _BaseCollection
    {
        /**
         * @param  int  $size
         * @return RawWateratm[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _RawWateratmCollection|mixed $id
     * @property _RawWateratmCollection|mixed $created_at
     * @property _RawWateratmCollection|mixed $updated_at
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _RawWateratmCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _RawWateratmCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _RawWateratmCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _RawWateratmCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _RawWateratmCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _RawWateratmCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _RawWateratmCollection delete()
     */
    class _RawWateratmCollectionProxy
    {
    }

    /**
     * @method _RawWateratmQueryBuilder whereId($value)
     * @method _RawWateratmQueryBuilder whereCreatedAt($value)
     * @method _RawWateratmQueryBuilder whereUpdatedAt($value)
     * @method RawWateratm create(array $attributes = [])
     * @method _RawWateratmCollection|RawWateratm[] cursor()
     * @method RawWateratm|null find($id, array $columns = ['*'])
     * @method _RawWateratmCollection|RawWateratm[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method RawWateratm findOrFail($id, array $columns = ['*'])
     * @method _RawWateratmCollection|RawWateratm[] findOrNew($id, array $columns = ['*'])
     * @method RawWateratm first(array|string $columns = ['*'])
     * @method RawWateratm firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method RawWateratm firstOrCreate(array $attributes, array $values = [])
     * @method RawWateratm firstOrFail(array $columns = ['*'])
     * @method RawWateratm firstOrNew(array $attributes = [], array $values = [])
     * @method RawWateratm firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method RawWateratm forceCreate(array $attributes)
     * @method _RawWateratmCollection|RawWateratm[] fromQuery(string $query, array $bindings = [])
     * @method _RawWateratmCollection|RawWateratm[] get(array|string $columns = ['*'])
     * @method RawWateratm getModel()
     * @method RawWateratm[] getModels(array|string $columns = ['*'])
     * @method _RawWateratmCollection|RawWateratm[] hydrate(array $items)
     * @method RawWateratm make(array $attributes = [])
     * @method RawWateratm newModelInstance(array $attributes = [])
     * @method RawWateratm updateOrCreate(array $attributes, array $values = [])
     */
    class _RawWateratmQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method SmartMeter shift()
     * @method SmartMeter pop()
     * @method SmartMeter get($key, $default = null)
     * @method SmartMeter pull($key, $default = null)
     * @method SmartMeter first(callable $callback = null, $default = null)
     * @method SmartMeter firstWhere(string $key, $operator = null, $value = null)
     * @method SmartMeter[] all()
     * @method SmartMeter last(callable $callback = null, $default = null)
     * @property-read _SmartMeterCollectionProxy $keyBy
     * @property-read _SmartMeterCollectionProxy $max
     * @property-read _SmartMeterCollectionProxy $partition
     * @property-read _SmartMeterCollectionProxy $average
     * @property-read _SmartMeterCollectionProxy $flatMap
     * @property-read _SmartMeterCollectionProxy $each
     * @property-read _SmartMeterCollectionProxy $some
     * @property-read _SmartMeterCollectionProxy $map
     * @property-read _SmartMeterCollectionProxy $sortByDesc
     * @property-read _SmartMeterCollectionProxy $filter
     * @property-read _SmartMeterCollectionProxy $avg
     * @property-read _SmartMeterCollectionProxy $unique
     * @property-read _SmartMeterCollectionProxy $first
     * @property-read _SmartMeterCollectionProxy $min
     * @property-read _SmartMeterCollectionProxy $groupBy
     * @property-read _SmartMeterCollectionProxy $reject
     * @property-read _SmartMeterCollectionProxy $sortBy
     * @property-read _SmartMeterCollectionProxy $contains
     * @property-read _SmartMeterCollectionProxy $sum
     * @property-read _SmartMeterCollectionProxy $until
     * @property-read _SmartMeterCollectionProxy $every
     */
    class _SmartMeterCollection extends _BaseCollection
    {
        /**
         * @param  int  $size
         * @return SmartMeter[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _SmartMeterCollection|mixed $id
     * @property _SmartMeterCollection|mixed $created_at
     * @property _SmartMeterCollection|mixed $updated_at
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _SmartMeterCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _SmartMeterCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _SmartMeterCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _SmartMeterCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _SmartMeterCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _SmartMeterCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _SmartMeterCollection delete()
     */
    class _SmartMeterCollectionProxy
    {
    }

    /**
     * @method _SmartMeterQueryBuilder whereId($value)
     * @method _SmartMeterQueryBuilder whereCreatedAt($value)
     * @method _SmartMeterQueryBuilder whereUpdatedAt($value)
     * @method SmartMeter create(array $attributes = [])
     * @method _SmartMeterCollection|SmartMeter[] cursor()
     * @method SmartMeter|null find($id, array $columns = ['*'])
     * @method _SmartMeterCollection|SmartMeter[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method SmartMeter findOrFail($id, array $columns = ['*'])
     * @method _SmartMeterCollection|SmartMeter[] findOrNew($id, array $columns = ['*'])
     * @method SmartMeter first(array|string $columns = ['*'])
     * @method SmartMeter firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method SmartMeter firstOrCreate(array $attributes, array $values = [])
     * @method SmartMeter firstOrFail(array $columns = ['*'])
     * @method SmartMeter firstOrNew(array $attributes = [], array $values = [])
     * @method SmartMeter firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method SmartMeter forceCreate(array $attributes)
     * @method _SmartMeterCollection|SmartMeter[] fromQuery(string $query, array $bindings = [])
     * @method _SmartMeterCollection|SmartMeter[] get(array|string $columns = ['*'])
     * @method SmartMeter getModel()
     * @method SmartMeter[] getModels(array|string $columns = ['*'])
     * @method _SmartMeterCollection|SmartMeter[] hydrate(array $items)
     * @method SmartMeter make(array $attributes = [])
     * @method SmartMeter newModelInstance(array $attributes = [])
     * @method SmartMeter updateOrCreate(array $attributes, array $values = [])
     */
    class _SmartMeterQueryBuilder extends _BaseBuilder
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
     * @property _UserCollection|mixed $weight
     * @property _UserCollection|mixed $restricted
     * @property _UserCollection|mixed $meta
     * @property _UserCollection|mixed $deleted_at
     * @see \App\User::newQuery
     * @method _UserCollection newQuery()
     * @see \App\User::newModelQuery
     * @method _UserCollection newModelQuery()
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
     * @method _UserQueryBuilder whereWeight($value)
     * @method _UserQueryBuilder whereRestricted($value)
     * @method _UserQueryBuilder whereMeta($value)
     * @method _UserQueryBuilder whereDeletedAt($value)
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
namespace LaravelIdea\Helper\Laravel\Nova\Actions {

    use Illuminate\Contracts\Support\Arrayable;
    use Laravel\Nova\Actions\ActionEvent;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method ActionEvent shift()
     * @method ActionEvent pop()
     * @method ActionEvent get($key, $default = null)
     * @method ActionEvent pull($key, $default = null)
     * @method ActionEvent first(callable $callback = null, $default = null)
     * @method ActionEvent firstWhere(string $key, $operator = null, $value = null)
     * @method ActionEvent[] all()
     * @method ActionEvent last(callable $callback = null, $default = null)
     * @property-read _ActionEventCollectionProxy $keyBy
     * @property-read _ActionEventCollectionProxy $max
     * @property-read _ActionEventCollectionProxy $partition
     * @property-read _ActionEventCollectionProxy $average
     * @property-read _ActionEventCollectionProxy $flatMap
     * @property-read _ActionEventCollectionProxy $each
     * @property-read _ActionEventCollectionProxy $some
     * @property-read _ActionEventCollectionProxy $map
     * @property-read _ActionEventCollectionProxy $sortByDesc
     * @property-read _ActionEventCollectionProxy $filter
     * @property-read _ActionEventCollectionProxy $avg
     * @property-read _ActionEventCollectionProxy $unique
     * @property-read _ActionEventCollectionProxy $first
     * @property-read _ActionEventCollectionProxy $min
     * @property-read _ActionEventCollectionProxy $groupBy
     * @property-read _ActionEventCollectionProxy $reject
     * @property-read _ActionEventCollectionProxy $sortBy
     * @property-read _ActionEventCollectionProxy $contains
     * @property-read _ActionEventCollectionProxy $sum
     * @property-read _ActionEventCollectionProxy $until
     * @property-read _ActionEventCollectionProxy $every
     */
    class _ActionEventCollection extends _BaseCollection
    {
        /**
         * @param  int  $size
         * @return ActionEvent[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _ActionEventCollection|mixed $id
     * @property _ActionEventCollection|mixed $batch_id
     * @property _ActionEventCollection|mixed $user_id
     * @property _ActionEventCollection|mixed $name
     * @property _ActionEventCollection|mixed $actionable_type
     * @property _ActionEventCollection|mixed $actionable_id
     * @property _ActionEventCollection|mixed $target_type
     * @property _ActionEventCollection|mixed $target_id
     * @property _ActionEventCollection|mixed $model_type
     * @property _ActionEventCollection|mixed $model_id
     * @property _ActionEventCollection|mixed $fields
     * @property _ActionEventCollection|mixed $status
     * @property _ActionEventCollection|mixed $exception
     * @property _ActionEventCollection|mixed $created_at
     * @property _ActionEventCollection|mixed $updated_at
     * @property _ActionEventCollection|mixed $original
     * @property _ActionEventCollection|mixed $changes
     * @property _ActionEventCollection|mixed $target
     * @property _ActionEventCollection|mixed $target
     * @property _ActionEventCollection|mixed $user
     * @property _ActionEventCollection|mixed $user
     * @see \Laravel\Nova\Actions\ActionEvent::getTable
     * @method _ActionEventCollection getTable()
     * @see \Laravel\Nova\Actions\ActionEvent::getTable
     * @method _ActionEventCollection getTable()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _ActionEventCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _ActionEventCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _ActionEventCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _ActionEventCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _ActionEventCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _ActionEventCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _ActionEventCollection delete()
     */
    class _ActionEventCollectionProxy
    {
    }

    /**
     * @method _ActionEventQueryBuilder whereId($value)
     * @method _ActionEventQueryBuilder whereBatchId($value)
     * @method _ActionEventQueryBuilder whereUserId($value)
     * @method _ActionEventQueryBuilder whereName($value)
     * @method _ActionEventQueryBuilder whereActionableType($value)
     * @method _ActionEventQueryBuilder whereActionableId($value)
     * @method _ActionEventQueryBuilder whereTargetType($value)
     * @method _ActionEventQueryBuilder whereTargetId($value)
     * @method _ActionEventQueryBuilder whereModelType($value)
     * @method _ActionEventQueryBuilder whereModelId($value)
     * @method _ActionEventQueryBuilder whereFields($value)
     * @method _ActionEventQueryBuilder whereStatus($value)
     * @method _ActionEventQueryBuilder whereException($value)
     * @method _ActionEventQueryBuilder whereCreatedAt($value)
     * @method _ActionEventQueryBuilder whereUpdatedAt($value)
     * @method _ActionEventQueryBuilder whereOriginal($value)
     * @method _ActionEventQueryBuilder whereChanges($value)
     * @method ActionEvent create(array $attributes = [])
     * @method _ActionEventCollection|ActionEvent[] cursor()
     * @method ActionEvent|null find($id, array $columns = ['*'])
     * @method _ActionEventCollection|ActionEvent[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ActionEvent findOrFail($id, array $columns = ['*'])
     * @method _ActionEventCollection|ActionEvent[] findOrNew($id, array $columns = ['*'])
     * @method ActionEvent first(array|string $columns = ['*'])
     * @method ActionEvent firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ActionEvent firstOrCreate(array $attributes, array $values = [])
     * @method ActionEvent firstOrFail(array $columns = ['*'])
     * @method ActionEvent firstOrNew(array $attributes = [], array $values = [])
     * @method ActionEvent firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ActionEvent forceCreate(array $attributes)
     * @method _ActionEventCollection|ActionEvent[] fromQuery(string $query, array $bindings = [])
     * @method _ActionEventCollection|ActionEvent[] get(array|string $columns = ['*'])
     * @method ActionEvent getModel()
     * @method ActionEvent[] getModels(array|string $columns = ['*'])
     * @method _ActionEventCollection|ActionEvent[] hydrate(array $items)
     * @method ActionEvent make(array $attributes = [])
     * @method ActionEvent newModelInstance(array $attributes = [])
     * @method ActionEvent updateOrCreate(array $attributes, array $values = [])
     */
    class _ActionEventQueryBuilder extends _BaseBuilder
    {
    }
}
namespace LaravelIdea\Helper\Laravel\Nova\Tests\Controller {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Notifications\Notification;
    use Laravel\Nova\Tests\Controller\Author;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method Author shift()
     * @method Author pop()
     * @method Author get($key, $default = null)
     * @method Author pull($key, $default = null)
     * @method Author first(callable $callback = null, $default = null)
     * @method Author firstWhere(string $key, $operator = null, $value = null)
     * @method Author[] all()
     * @method Author last(callable $callback = null, $default = null)
     * @property-read _AuthorCollectionProxy $keyBy
     * @property-read _AuthorCollectionProxy $max
     * @property-read _AuthorCollectionProxy $partition
     * @property-read _AuthorCollectionProxy $average
     * @property-read _AuthorCollectionProxy $flatMap
     * @property-read _AuthorCollectionProxy $each
     * @property-read _AuthorCollectionProxy $some
     * @property-read _AuthorCollectionProxy $map
     * @property-read _AuthorCollectionProxy $sortByDesc
     * @property-read _AuthorCollectionProxy $filter
     * @property-read _AuthorCollectionProxy $avg
     * @property-read _AuthorCollectionProxy $unique
     * @property-read _AuthorCollectionProxy $first
     * @property-read _AuthorCollectionProxy $min
     * @property-read _AuthorCollectionProxy $groupBy
     * @property-read _AuthorCollectionProxy $reject
     * @property-read _AuthorCollectionProxy $sortBy
     * @property-read _AuthorCollectionProxy $contains
     * @property-read _AuthorCollectionProxy $sum
     * @property-read _AuthorCollectionProxy $until
     * @property-read _AuthorCollectionProxy $every
     */
    class _AuthorCollection extends _BaseCollection
    {
        /**
         * @param  int  $size
         * @return Author[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _AuthorCollection|mixed $id
     * @property _AuthorCollection|mixed $name
     * @property _AuthorCollection|mixed $email
     * @property _AuthorCollection|mixed $email_verified_at
     * @property _AuthorCollection|mixed $password
     * @property _AuthorCollection|mixed $remember_token
     * @property _AuthorCollection|mixed $created_at
     * @property _AuthorCollection|mixed $updated_at
     * @property _AuthorCollection|mixed $weight
     * @property _AuthorCollection|mixed $restricted
     * @property _AuthorCollection|mixed $meta
     * @property _AuthorCollection|mixed $deleted_at
     * @property _AuthorCollection|mixed $address
     * @property _AuthorCollection|mixed $address
     * @property _AuthorCollection|mixed $getPostAttribute
     * @property _AuthorCollection|mixed $getPostAttribute
     * @property _AuthorCollection|mixed $profile
     * @property _AuthorCollection|mixed $profile
     * @see \Laravel\Nova\Tests\Fixtures\User::sendPasswordResetNotification
     * @method _AuthorCollection sendPasswordResetNotification(string $token)
     * @see \Laravel\Nova\Tests\Fixtures\User::userRoles
     * @method _AuthorCollection userRoles()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::isForceDeleting
     * @method _AuthorCollection isForceDeleting()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::trashed
     * @method _AuthorCollection trashed()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::getQualifiedDeletedAtColumn
     * @method _AuthorCollection getQualifiedDeletedAtColumn()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::restore
     * @method _AuthorCollection restore()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::getDeletedAtColumn
     * @method _AuthorCollection getDeletedAtColumn()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::forceDelete
     * @method _AuthorCollection forceDelete()
     * @see \Illuminate\Notifications\RoutesNotifications::notifyNow
     * @method _AuthorCollection notifyNow($instance, array $channels = null)
     * @see \Illuminate\Notifications\RoutesNotifications::notify
     * @method _AuthorCollection notify($instance)
     * @see \Illuminate\Notifications\RoutesNotifications::routeNotificationFor
     * @method _AuthorCollection routeNotificationFor(string $driver, Notification|null $notification = null)
     * @see \Illuminate\Notifications\HasDatabaseNotifications::readNotifications
     * @method _AuthorCollection readNotifications()
     * @see \Illuminate\Notifications\HasDatabaseNotifications::unreadNotifications
     * @method _AuthorCollection unreadNotifications()
     * @see \Illuminate\Auth\MustVerifyEmail::sendEmailVerificationNotification
     * @method _AuthorCollection sendEmailVerificationNotification()
     * @see \Illuminate\Auth\MustVerifyEmail::getEmailForVerification
     * @method _AuthorCollection getEmailForVerification()
     * @see \Illuminate\Auth\MustVerifyEmail::markEmailAsVerified
     * @method _AuthorCollection markEmailAsVerified()
     * @see \Illuminate\Auth\MustVerifyEmail::hasVerifiedEmail
     * @method _AuthorCollection hasVerifiedEmail()
     * @see \Illuminate\Auth\Authenticatable::getRememberTokenName
     * @method _AuthorCollection getRememberTokenName()
     * @see \Illuminate\Auth\Authenticatable::getAuthPassword
     * @method _AuthorCollection getAuthPassword()
     * @see \Illuminate\Auth\Authenticatable::getAuthIdentifier
     * @method _AuthorCollection getAuthIdentifier()
     * @see \Illuminate\Auth\Authenticatable::getRememberToken
     * @method _AuthorCollection getRememberToken()
     * @see \Illuminate\Auth\Authenticatable::setRememberToken
     * @method _AuthorCollection setRememberToken(string $value)
     * @see \Illuminate\Auth\Authenticatable::getAuthIdentifierName
     * @method _AuthorCollection getAuthIdentifierName()
     * @see \Illuminate\Foundation\Auth\Access\Authorizable::can
     * @method _AuthorCollection can(iterable|string $abilities, array $arguments = [])
     * @see \Illuminate\Foundation\Auth\Access\Authorizable::cant
     * @method _AuthorCollection cant(iterable|string $abilities, array $arguments = [])
     * @see \Illuminate\Foundation\Auth\Access\Authorizable::cannot
     * @method _AuthorCollection cannot(iterable|string $abilities, array $arguments = [])
     * @see \Illuminate\Auth\Passwords\CanResetPassword::sendPasswordResetNotification
     * @method _AuthorCollection sendPasswordResetNotification(string $token)
     * @see \Illuminate\Auth\Passwords\CanResetPassword::getEmailForPasswordReset
     * @method _AuthorCollection getEmailForPasswordReset()
     * @see \Laravel\Nova\Tests\Fixtures\User::sendPasswordResetNotification
     * @method _AuthorCollection sendPasswordResetNotification(string $token)
     * @see \Laravel\Nova\Tests\Fixtures\User::userRoles
     * @method _AuthorCollection userRoles()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::isForceDeleting
     * @method _AuthorCollection isForceDeleting()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::trashed
     * @method _AuthorCollection trashed()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::getQualifiedDeletedAtColumn
     * @method _AuthorCollection getQualifiedDeletedAtColumn()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::restore
     * @method _AuthorCollection restore()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::getDeletedAtColumn
     * @method _AuthorCollection getDeletedAtColumn()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::forceDelete
     * @method _AuthorCollection forceDelete()
     * @see \Illuminate\Notifications\RoutesNotifications::notifyNow
     * @method _AuthorCollection notifyNow($instance, array $channels = null)
     * @see \Illuminate\Notifications\RoutesNotifications::notify
     * @method _AuthorCollection notify($instance)
     * @see \Illuminate\Notifications\RoutesNotifications::routeNotificationFor
     * @method _AuthorCollection routeNotificationFor(string $driver, Notification|null $notification = null)
     * @see \Illuminate\Notifications\HasDatabaseNotifications::readNotifications
     * @method _AuthorCollection readNotifications()
     * @see \Illuminate\Notifications\HasDatabaseNotifications::unreadNotifications
     * @method _AuthorCollection unreadNotifications()
     * @see \Illuminate\Auth\MustVerifyEmail::sendEmailVerificationNotification
     * @method _AuthorCollection sendEmailVerificationNotification()
     * @see \Illuminate\Auth\MustVerifyEmail::getEmailForVerification
     * @method _AuthorCollection getEmailForVerification()
     * @see \Illuminate\Auth\MustVerifyEmail::markEmailAsVerified
     * @method _AuthorCollection markEmailAsVerified()
     * @see \Illuminate\Auth\MustVerifyEmail::hasVerifiedEmail
     * @method _AuthorCollection hasVerifiedEmail()
     * @see \Illuminate\Auth\Authenticatable::getRememberTokenName
     * @method _AuthorCollection getRememberTokenName()
     * @see \Illuminate\Auth\Authenticatable::getAuthPassword
     * @method _AuthorCollection getAuthPassword()
     * @see \Illuminate\Auth\Authenticatable::getAuthIdentifier
     * @method _AuthorCollection getAuthIdentifier()
     * @see \Illuminate\Auth\Authenticatable::getRememberToken
     * @method _AuthorCollection getRememberToken()
     * @see \Illuminate\Auth\Authenticatable::setRememberToken
     * @method _AuthorCollection setRememberToken(string $value)
     * @see \Illuminate\Auth\Authenticatable::getAuthIdentifierName
     * @method _AuthorCollection getAuthIdentifierName()
     * @see \Illuminate\Foundation\Auth\Access\Authorizable::can
     * @method _AuthorCollection can(iterable|string $abilities, array $arguments = [])
     * @see \Illuminate\Foundation\Auth\Access\Authorizable::cant
     * @method _AuthorCollection cant(iterable|string $abilities, array $arguments = [])
     * @see \Illuminate\Foundation\Auth\Access\Authorizable::cannot
     * @method _AuthorCollection cannot(iterable|string $abilities, array $arguments = [])
     * @see \Illuminate\Auth\Passwords\CanResetPassword::sendPasswordResetNotification
     * @method _AuthorCollection sendPasswordResetNotification(string $token)
     * @see \Illuminate\Auth\Passwords\CanResetPassword::getEmailForPasswordReset
     * @method _AuthorCollection getEmailForPasswordReset()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _AuthorCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _AuthorCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _AuthorCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _AuthorCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _AuthorCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _AuthorCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _AuthorCollection delete()
     */
    class _AuthorCollectionProxy
    {
    }

    /**
     * @method _AuthorQueryBuilder whereId($value)
     * @method _AuthorQueryBuilder whereName($value)
     * @method _AuthorQueryBuilder whereEmail($value)
     * @method _AuthorQueryBuilder whereEmailVerifiedAt($value)
     * @method _AuthorQueryBuilder wherePassword($value)
     * @method _AuthorQueryBuilder whereRememberToken($value)
     * @method _AuthorQueryBuilder whereCreatedAt($value)
     * @method _AuthorQueryBuilder whereUpdatedAt($value)
     * @method _AuthorQueryBuilder whereWeight($value)
     * @method _AuthorQueryBuilder whereRestricted($value)
     * @method _AuthorQueryBuilder whereMeta($value)
     * @method _AuthorQueryBuilder whereDeletedAt($value)
     * @method Author create(array $attributes = [])
     * @method _AuthorCollection|Author[] cursor()
     * @method Author|null find($id, array $columns = ['*'])
     * @method _AuthorCollection|Author[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Author findOrFail($id, array $columns = ['*'])
     * @method _AuthorCollection|Author[] findOrNew($id, array $columns = ['*'])
     * @method Author first(array|string $columns = ['*'])
     * @method Author firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Author firstOrCreate(array $attributes, array $values = [])
     * @method Author firstOrFail(array $columns = ['*'])
     * @method Author firstOrNew(array $attributes = [], array $values = [])
     * @method Author firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Author forceCreate(array $attributes)
     * @method _AuthorCollection|Author[] fromQuery(string $query, array $bindings = [])
     * @method _AuthorCollection|Author[] get(array|string $columns = ['*'])
     * @method Author getModel()
     * @method Author[] getModels(array|string $columns = ['*'])
     * @method _AuthorCollection|Author[] hydrate(array $items)
     * @method Author make(array $attributes = [])
     * @method Author newModelInstance(array $attributes = [])
     * @method Author updateOrCreate(array $attributes, array $values = [])
     * @method _AuthorQueryBuilder withTrashed()
     * @method _AuthorQueryBuilder onlyTrashed()
     * @method _AuthorQueryBuilder withoutTrashed()
     */
    class _AuthorQueryBuilder extends _BaseBuilder
    {
    }
}
namespace LaravelIdea\Helper\Laravel\Nova\Tests\Feature {

    use Illuminate\Contracts\Support\Arrayable;
    use Laravel\Nova\Tests\Feature\CustomActionEvent;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method CustomActionEvent shift()
     * @method CustomActionEvent pop()
     * @method CustomActionEvent get($key, $default = null)
     * @method CustomActionEvent pull($key, $default = null)
     * @method CustomActionEvent first(callable $callback = null, $default = null)
     * @method CustomActionEvent firstWhere(string $key, $operator = null, $value = null)
     * @method CustomActionEvent[] all()
     * @method CustomActionEvent last(callable $callback = null, $default = null)
     * @property-read _CustomActionEventCollectionProxy $keyBy
     * @property-read _CustomActionEventCollectionProxy $max
     * @property-read _CustomActionEventCollectionProxy $partition
     * @property-read _CustomActionEventCollectionProxy $average
     * @property-read _CustomActionEventCollectionProxy $flatMap
     * @property-read _CustomActionEventCollectionProxy $each
     * @property-read _CustomActionEventCollectionProxy $some
     * @property-read _CustomActionEventCollectionProxy $map
     * @property-read _CustomActionEventCollectionProxy $sortByDesc
     * @property-read _CustomActionEventCollectionProxy $filter
     * @property-read _CustomActionEventCollectionProxy $avg
     * @property-read _CustomActionEventCollectionProxy $unique
     * @property-read _CustomActionEventCollectionProxy $first
     * @property-read _CustomActionEventCollectionProxy $min
     * @property-read _CustomActionEventCollectionProxy $groupBy
     * @property-read _CustomActionEventCollectionProxy $reject
     * @property-read _CustomActionEventCollectionProxy $sortBy
     * @property-read _CustomActionEventCollectionProxy $contains
     * @property-read _CustomActionEventCollectionProxy $sum
     * @property-read _CustomActionEventCollectionProxy $until
     * @property-read _CustomActionEventCollectionProxy $every
     */
    class _CustomActionEventCollection extends _BaseCollection
    {
        /**
         * @param  int  $size
         * @return CustomActionEvent[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _CustomActionEventCollection|mixed $target
     * @property _CustomActionEventCollection|mixed $target
     * @property _CustomActionEventCollection|mixed $user
     * @property _CustomActionEventCollection|mixed $user
     * @see \Laravel\Nova\Actions\ActionEvent::getTable
     * @method _CustomActionEventCollection getTable()
     * @see \Laravel\Nova\Actions\ActionEvent::getTable
     * @method _CustomActionEventCollection getTable()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _CustomActionEventCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _CustomActionEventCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _CustomActionEventCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _CustomActionEventCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _CustomActionEventCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _CustomActionEventCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _CustomActionEventCollection delete()
     */
    class _CustomActionEventCollectionProxy
    {
    }

    /**
     * @method CustomActionEvent create(array $attributes = [])
     * @method _CustomActionEventCollection|CustomActionEvent[] cursor()
     * @method CustomActionEvent|null find($id, array $columns = ['*'])
     * @method _CustomActionEventCollection|CustomActionEvent[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method CustomActionEvent findOrFail($id, array $columns = ['*'])
     * @method _CustomActionEventCollection|CustomActionEvent[] findOrNew($id, array $columns = ['*'])
     * @method CustomActionEvent first(array|string $columns = ['*'])
     * @method CustomActionEvent firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method CustomActionEvent firstOrCreate(array $attributes, array $values = [])
     * @method CustomActionEvent firstOrFail(array $columns = ['*'])
     * @method CustomActionEvent firstOrNew(array $attributes = [], array $values = [])
     * @method CustomActionEvent firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CustomActionEvent forceCreate(array $attributes)
     * @method _CustomActionEventCollection|CustomActionEvent[] fromQuery(string $query, array $bindings = [])
     * @method _CustomActionEventCollection|CustomActionEvent[] get(array|string $columns = ['*'])
     * @method CustomActionEvent getModel()
     * @method CustomActionEvent[] getModels(array|string $columns = ['*'])
     * @method _CustomActionEventCollection|CustomActionEvent[] hydrate(array $items)
     * @method CustomActionEvent make(array $attributes = [])
     * @method CustomActionEvent newModelInstance(array $attributes = [])
     * @method CustomActionEvent updateOrCreate(array $attributes, array $values = [])
     */
    class _CustomActionEventQueryBuilder extends _BaseBuilder
    {
    }
}
namespace LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Notifications\Notification;
    use Laravel\Nova\Tests\Fixtures\Address;
    use Laravel\Nova\Tests\Fixtures\Boolean;
    use Laravel\Nova\Tests\Fixtures\Comment;
    use Laravel\Nova\Tests\Fixtures\CustomConnectionActionEvent;
    use Laravel\Nova\Tests\Fixtures\CustomKey;
    use Laravel\Nova\Tests\Fixtures\Discussion;
    use Laravel\Nova\Tests\Fixtures\File;
    use Laravel\Nova\Tests\Fixtures\Post;
    use Laravel\Nova\Tests\Fixtures\PostWithCustomCreatedAt;
    use Laravel\Nova\Tests\Fixtures\Profile;
    use Laravel\Nova\Tests\Fixtures\Recipient;
    use Laravel\Nova\Tests\Fixtures\Role;
    use Laravel\Nova\Tests\Fixtures\RoleAssignment;
    use Laravel\Nova\Tests\Fixtures\SoftDeletingFile;
    use Laravel\Nova\Tests\Fixtures\Tag;
    use Laravel\Nova\Tests\Fixtures\User;
    use Laravel\Nova\Tests\Fixtures\UserEmailRelationship;
    use Laravel\Nova\Tests\Fixtures\VaporFile;
    use Laravel\Nova\Tests\Fixtures\Vehicle;
    use Laravel\Nova\Tests\Fixtures\Wheel;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method Address shift()
     * @method Address pop()
     * @method Address get($key, $default = null)
     * @method Address pull($key, $default = null)
     * @method Address first(callable $callback = null, $default = null)
     * @method Address firstWhere(string $key, $operator = null, $value = null)
     * @method Address[] all()
     * @method Address last(callable $callback = null, $default = null)
     * @property-read _AddressCollectionProxy $keyBy
     * @property-read _AddressCollectionProxy $max
     * @property-read _AddressCollectionProxy $partition
     * @property-read _AddressCollectionProxy $average
     * @property-read _AddressCollectionProxy $flatMap
     * @property-read _AddressCollectionProxy $each
     * @property-read _AddressCollectionProxy $some
     * @property-read _AddressCollectionProxy $map
     * @property-read _AddressCollectionProxy $sortByDesc
     * @property-read _AddressCollectionProxy $filter
     * @property-read _AddressCollectionProxy $avg
     * @property-read _AddressCollectionProxy $unique
     * @property-read _AddressCollectionProxy $first
     * @property-read _AddressCollectionProxy $min
     * @property-read _AddressCollectionProxy $groupBy
     * @property-read _AddressCollectionProxy $reject
     * @property-read _AddressCollectionProxy $sortBy
     * @property-read _AddressCollectionProxy $contains
     * @property-read _AddressCollectionProxy $sum
     * @property-read _AddressCollectionProxy $until
     * @property-read _AddressCollectionProxy $every
     */
    class _AddressCollection extends _BaseCollection
    {
        /**
         * @param  int  $size
         * @return Address[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _AddressCollection|mixed $id
     * @property _AddressCollection|mixed $user_id
     * @property _AddressCollection|mixed $name
     * @property _AddressCollection|mixed $created_at
     * @property _AddressCollection|mixed $updated_at
     * @property _AddressCollection|mixed $user
     * @property _AddressCollection|mixed $user
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _AddressCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _AddressCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _AddressCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _AddressCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _AddressCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _AddressCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _AddressCollection delete()
     */
    class _AddressCollectionProxy
    {
    }

    /**
     * @method _AddressQueryBuilder whereId($value)
     * @method _AddressQueryBuilder whereUserId($value)
     * @method _AddressQueryBuilder whereName($value)
     * @method _AddressQueryBuilder whereCreatedAt($value)
     * @method _AddressQueryBuilder whereUpdatedAt($value)
     * @method Address create(array $attributes = [])
     * @method _AddressCollection|Address[] cursor()
     * @method Address|null find($id, array $columns = ['*'])
     * @method _AddressCollection|Address[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Address findOrFail($id, array $columns = ['*'])
     * @method _AddressCollection|Address[] findOrNew($id, array $columns = ['*'])
     * @method Address first(array|string $columns = ['*'])
     * @method Address firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Address firstOrCreate(array $attributes, array $values = [])
     * @method Address firstOrFail(array $columns = ['*'])
     * @method Address firstOrNew(array $attributes = [], array $values = [])
     * @method Address firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Address forceCreate(array $attributes)
     * @method _AddressCollection|Address[] fromQuery(string $query, array $bindings = [])
     * @method _AddressCollection|Address[] get(array|string $columns = ['*'])
     * @method Address getModel()
     * @method Address[] getModels(array|string $columns = ['*'])
     * @method _AddressCollection|Address[] hydrate(array $items)
     * @method Address make(array $attributes = [])
     * @method Address newModelInstance(array $attributes = [])
     * @method Address updateOrCreate(array $attributes, array $values = [])
     */
    class _AddressQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method Boolean shift()
     * @method Boolean pop()
     * @method Boolean get($key, $default = null)
     * @method Boolean pull($key, $default = null)
     * @method Boolean first(callable $callback = null, $default = null)
     * @method Boolean firstWhere(string $key, $operator = null, $value = null)
     * @method Boolean[] all()
     * @method Boolean last(callable $callback = null, $default = null)
     * @property-read _BooleanCollectionProxy $keyBy
     * @property-read _BooleanCollectionProxy $max
     * @property-read _BooleanCollectionProxy $partition
     * @property-read _BooleanCollectionProxy $average
     * @property-read _BooleanCollectionProxy $flatMap
     * @property-read _BooleanCollectionProxy $each
     * @property-read _BooleanCollectionProxy $some
     * @property-read _BooleanCollectionProxy $map
     * @property-read _BooleanCollectionProxy $sortByDesc
     * @property-read _BooleanCollectionProxy $filter
     * @property-read _BooleanCollectionProxy $avg
     * @property-read _BooleanCollectionProxy $unique
     * @property-read _BooleanCollectionProxy $first
     * @property-read _BooleanCollectionProxy $min
     * @property-read _BooleanCollectionProxy $groupBy
     * @property-read _BooleanCollectionProxy $reject
     * @property-read _BooleanCollectionProxy $sortBy
     * @property-read _BooleanCollectionProxy $contains
     * @property-read _BooleanCollectionProxy $sum
     * @property-read _BooleanCollectionProxy $until
     * @property-read _BooleanCollectionProxy $every
     */
    class _BooleanCollection extends _BaseCollection
    {
        /**
         * @param  int  $size
         * @return Boolean[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _BooleanCollection|mixed $id
     * @property _BooleanCollection|mixed $active
     * @property _BooleanCollection|mixed $created_at
     * @property _BooleanCollection|mixed $updated_at
     * @see \Laravel\Nova\Actions\Actionable::actions
     * @method _BooleanCollection actions()
     * @see \Laravel\Nova\Actions\Actionable::actions
     * @method _BooleanCollection actions()
     * @see \Laravel\Nova\Actions\Actionable::actions
     * @method _BooleanCollection actions()
     * @see \Laravel\Nova\Actions\Actionable::actions
     * @method _BooleanCollection actions()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _BooleanCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _BooleanCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _BooleanCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _BooleanCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _BooleanCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _BooleanCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _BooleanCollection delete()
     */
    class _BooleanCollectionProxy
    {
    }

    /**
     * @method _BooleanQueryBuilder whereId($value)
     * @method _BooleanQueryBuilder whereActive($value)
     * @method _BooleanQueryBuilder whereCreatedAt($value)
     * @method _BooleanQueryBuilder whereUpdatedAt($value)
     * @method Boolean create(array $attributes = [])
     * @method _BooleanCollection|Boolean[] cursor()
     * @method Boolean|null find($id, array $columns = ['*'])
     * @method _BooleanCollection|Boolean[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Boolean findOrFail($id, array $columns = ['*'])
     * @method _BooleanCollection|Boolean[] findOrNew($id, array $columns = ['*'])
     * @method Boolean first(array|string $columns = ['*'])
     * @method Boolean firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Boolean firstOrCreate(array $attributes, array $values = [])
     * @method Boolean firstOrFail(array $columns = ['*'])
     * @method Boolean firstOrNew(array $attributes = [], array $values = [])
     * @method Boolean firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Boolean forceCreate(array $attributes)
     * @method _BooleanCollection|Boolean[] fromQuery(string $query, array $bindings = [])
     * @method _BooleanCollection|Boolean[] get(array|string $columns = ['*'])
     * @method Boolean getModel()
     * @method Boolean[] getModels(array|string $columns = ['*'])
     * @method _BooleanCollection|Boolean[] hydrate(array $items)
     * @method Boolean make(array $attributes = [])
     * @method Boolean newModelInstance(array $attributes = [])
     * @method Boolean updateOrCreate(array $attributes, array $values = [])
     */
    class _BooleanQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method Comment shift()
     * @method Comment pop()
     * @method Comment get($key, $default = null)
     * @method Comment pull($key, $default = null)
     * @method Comment first(callable $callback = null, $default = null)
     * @method Comment firstWhere(string $key, $operator = null, $value = null)
     * @method Comment[] all()
     * @method Comment last(callable $callback = null, $default = null)
     * @property-read _CommentCollectionProxy $keyBy
     * @property-read _CommentCollectionProxy $max
     * @property-read _CommentCollectionProxy $partition
     * @property-read _CommentCollectionProxy $average
     * @property-read _CommentCollectionProxy $flatMap
     * @property-read _CommentCollectionProxy $each
     * @property-read _CommentCollectionProxy $some
     * @property-read _CommentCollectionProxy $map
     * @property-read _CommentCollectionProxy $sortByDesc
     * @property-read _CommentCollectionProxy $filter
     * @property-read _CommentCollectionProxy $avg
     * @property-read _CommentCollectionProxy $unique
     * @property-read _CommentCollectionProxy $first
     * @property-read _CommentCollectionProxy $min
     * @property-read _CommentCollectionProxy $groupBy
     * @property-read _CommentCollectionProxy $reject
     * @property-read _CommentCollectionProxy $sortBy
     * @property-read _CommentCollectionProxy $contains
     * @property-read _CommentCollectionProxy $sum
     * @property-read _CommentCollectionProxy $until
     * @property-read _CommentCollectionProxy $every
     */
    class _CommentCollection extends _BaseCollection
    {
        /**
         * @param  int  $size
         * @return Comment[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _CommentCollection|mixed $id
     * @property _CommentCollection|mixed $commentable_id
     * @property _CommentCollection|mixed $commentable_type
     * @property _CommentCollection|mixed $author_id
     * @property _CommentCollection|mixed $body
     * @property _CommentCollection|mixed $created_at
     * @property _CommentCollection|mixed $updated_at
     * @property _CommentCollection|mixed $author
     * @property _CommentCollection|mixed $author
     * @property _CommentCollection|mixed $commentable
     * @property _CommentCollection|mixed $commentable
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _CommentCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _CommentCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _CommentCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _CommentCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _CommentCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _CommentCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _CommentCollection delete()
     */
    class _CommentCollectionProxy
    {
    }

    /**
     * @method _CommentQueryBuilder whereId($value)
     * @method _CommentQueryBuilder whereCommentableId($value)
     * @method _CommentQueryBuilder whereCommentableType($value)
     * @method _CommentQueryBuilder whereAuthorId($value)
     * @method _CommentQueryBuilder whereBody($value)
     * @method _CommentQueryBuilder whereCreatedAt($value)
     * @method _CommentQueryBuilder whereUpdatedAt($value)
     * @method Comment create(array $attributes = [])
     * @method _CommentCollection|Comment[] cursor()
     * @method Comment|null find($id, array $columns = ['*'])
     * @method _CommentCollection|Comment[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Comment findOrFail($id, array $columns = ['*'])
     * @method _CommentCollection|Comment[] findOrNew($id, array $columns = ['*'])
     * @method Comment first(array|string $columns = ['*'])
     * @method Comment firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Comment firstOrCreate(array $attributes, array $values = [])
     * @method Comment firstOrFail(array $columns = ['*'])
     * @method Comment firstOrNew(array $attributes = [], array $values = [])
     * @method Comment firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Comment forceCreate(array $attributes)
     * @method _CommentCollection|Comment[] fromQuery(string $query, array $bindings = [])
     * @method _CommentCollection|Comment[] get(array|string $columns = ['*'])
     * @method Comment getModel()
     * @method Comment[] getModels(array|string $columns = ['*'])
     * @method _CommentCollection|Comment[] hydrate(array $items)
     * @method Comment make(array $attributes = [])
     * @method Comment newModelInstance(array $attributes = [])
     * @method Comment updateOrCreate(array $attributes, array $values = [])
     */
    class _CommentQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method CustomConnectionActionEvent shift()
     * @method CustomConnectionActionEvent pop()
     * @method CustomConnectionActionEvent get($key, $default = null)
     * @method CustomConnectionActionEvent pull($key, $default = null)
     * @method CustomConnectionActionEvent first(callable $callback = null, $default = null)
     * @method CustomConnectionActionEvent firstWhere(string $key, $operator = null, $value = null)
     * @method CustomConnectionActionEvent[] all()
     * @method CustomConnectionActionEvent last(callable $callback = null, $default = null)
     * @property-read _CustomConnectionActionEventCollectionProxy $keyBy
     * @property-read _CustomConnectionActionEventCollectionProxy $max
     * @property-read _CustomConnectionActionEventCollectionProxy $partition
     * @property-read _CustomConnectionActionEventCollectionProxy $average
     * @property-read _CustomConnectionActionEventCollectionProxy $flatMap
     * @property-read _CustomConnectionActionEventCollectionProxy $each
     * @property-read _CustomConnectionActionEventCollectionProxy $some
     * @property-read _CustomConnectionActionEventCollectionProxy $map
     * @property-read _CustomConnectionActionEventCollectionProxy $sortByDesc
     * @property-read _CustomConnectionActionEventCollectionProxy $filter
     * @property-read _CustomConnectionActionEventCollectionProxy $avg
     * @property-read _CustomConnectionActionEventCollectionProxy $unique
     * @property-read _CustomConnectionActionEventCollectionProxy $first
     * @property-read _CustomConnectionActionEventCollectionProxy $min
     * @property-read _CustomConnectionActionEventCollectionProxy $groupBy
     * @property-read _CustomConnectionActionEventCollectionProxy $reject
     * @property-read _CustomConnectionActionEventCollectionProxy $sortBy
     * @property-read _CustomConnectionActionEventCollectionProxy $contains
     * @property-read _CustomConnectionActionEventCollectionProxy $sum
     * @property-read _CustomConnectionActionEventCollectionProxy $until
     * @property-read _CustomConnectionActionEventCollectionProxy $every
     */
    class _CustomConnectionActionEventCollection extends _BaseCollection
    {
        /**
         * @param  int  $size
         * @return CustomConnectionActionEvent[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _CustomConnectionActionEventCollection|mixed $target
     * @property _CustomConnectionActionEventCollection|mixed $target
     * @property _CustomConnectionActionEventCollection|mixed $user
     * @property _CustomConnectionActionEventCollection|mixed $user
     * @see \Laravel\Nova\Actions\ActionEvent::getTable
     * @method _CustomConnectionActionEventCollection getTable()
     * @see \Laravel\Nova\Actions\ActionEvent::getTable
     * @method _CustomConnectionActionEventCollection getTable()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _CustomConnectionActionEventCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _CustomConnectionActionEventCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _CustomConnectionActionEventCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _CustomConnectionActionEventCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _CustomConnectionActionEventCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _CustomConnectionActionEventCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _CustomConnectionActionEventCollection delete()
     */
    class _CustomConnectionActionEventCollectionProxy
    {
    }

    /**
     * @method CustomConnectionActionEvent create(array $attributes = [])
     * @method _CustomConnectionActionEventCollection|CustomConnectionActionEvent[] cursor()
     * @method CustomConnectionActionEvent|null find($id, array $columns = ['*'])
     * @method _CustomConnectionActionEventCollection|CustomConnectionActionEvent[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method CustomConnectionActionEvent findOrFail($id, array $columns = ['*'])
     * @method _CustomConnectionActionEventCollection|CustomConnectionActionEvent[] findOrNew($id, array $columns = ['*'])
     * @method CustomConnectionActionEvent first(array|string $columns = ['*'])
     * @method CustomConnectionActionEvent firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method CustomConnectionActionEvent firstOrCreate(array $attributes, array $values = [])
     * @method CustomConnectionActionEvent firstOrFail(array $columns = ['*'])
     * @method CustomConnectionActionEvent firstOrNew(array $attributes = [], array $values = [])
     * @method CustomConnectionActionEvent firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CustomConnectionActionEvent forceCreate(array $attributes)
     * @method _CustomConnectionActionEventCollection|CustomConnectionActionEvent[] fromQuery(string $query, array $bindings = [])
     * @method _CustomConnectionActionEventCollection|CustomConnectionActionEvent[] get(array|string $columns = ['*'])
     * @method CustomConnectionActionEvent getModel()
     * @method CustomConnectionActionEvent[] getModels(array|string $columns = ['*'])
     * @method _CustomConnectionActionEventCollection|CustomConnectionActionEvent[] hydrate(array $items)
     * @method CustomConnectionActionEvent make(array $attributes = [])
     * @method CustomConnectionActionEvent newModelInstance(array $attributes = [])
     * @method CustomConnectionActionEvent updateOrCreate(array $attributes, array $values = [])
     */
    class _CustomConnectionActionEventQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method CustomKey shift()
     * @method CustomKey pop()
     * @method CustomKey get($key, $default = null)
     * @method CustomKey pull($key, $default = null)
     * @method CustomKey first(callable $callback = null, $default = null)
     * @method CustomKey firstWhere(string $key, $operator = null, $value = null)
     * @method CustomKey[] all()
     * @method CustomKey last(callable $callback = null, $default = null)
     * @property-read _CustomKeyCollectionProxy $keyBy
     * @property-read _CustomKeyCollectionProxy $max
     * @property-read _CustomKeyCollectionProxy $partition
     * @property-read _CustomKeyCollectionProxy $average
     * @property-read _CustomKeyCollectionProxy $flatMap
     * @property-read _CustomKeyCollectionProxy $each
     * @property-read _CustomKeyCollectionProxy $some
     * @property-read _CustomKeyCollectionProxy $map
     * @property-read _CustomKeyCollectionProxy $sortByDesc
     * @property-read _CustomKeyCollectionProxy $filter
     * @property-read _CustomKeyCollectionProxy $avg
     * @property-read _CustomKeyCollectionProxy $unique
     * @property-read _CustomKeyCollectionProxy $first
     * @property-read _CustomKeyCollectionProxy $min
     * @property-read _CustomKeyCollectionProxy $groupBy
     * @property-read _CustomKeyCollectionProxy $reject
     * @property-read _CustomKeyCollectionProxy $sortBy
     * @property-read _CustomKeyCollectionProxy $contains
     * @property-read _CustomKeyCollectionProxy $sum
     * @property-read _CustomKeyCollectionProxy $until
     * @property-read _CustomKeyCollectionProxy $every
     */
    class _CustomKeyCollection extends _BaseCollection
    {
        /**
         * @param  int  $size
         * @return CustomKey[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _CustomKeyCollection|mixed $pk
     * @property _CustomKeyCollection|mixed $created_at
     * @property _CustomKeyCollection|mixed $updated_at
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _CustomKeyCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _CustomKeyCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _CustomKeyCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _CustomKeyCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _CustomKeyCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _CustomKeyCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _CustomKeyCollection delete()
     */
    class _CustomKeyCollectionProxy
    {
    }

    /**
     * @method _CustomKeyQueryBuilder wherePk($value)
     * @method _CustomKeyQueryBuilder whereCreatedAt($value)
     * @method _CustomKeyQueryBuilder whereUpdatedAt($value)
     * @method CustomKey create(array $attributes = [])
     * @method _CustomKeyCollection|CustomKey[] cursor()
     * @method CustomKey|null find($id, array $columns = ['*'])
     * @method _CustomKeyCollection|CustomKey[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method CustomKey findOrFail($id, array $columns = ['*'])
     * @method _CustomKeyCollection|CustomKey[] findOrNew($id, array $columns = ['*'])
     * @method CustomKey first(array|string $columns = ['*'])
     * @method CustomKey firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method CustomKey firstOrCreate(array $attributes, array $values = [])
     * @method CustomKey firstOrFail(array $columns = ['*'])
     * @method CustomKey firstOrNew(array $attributes = [], array $values = [])
     * @method CustomKey firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CustomKey forceCreate(array $attributes)
     * @method _CustomKeyCollection|CustomKey[] fromQuery(string $query, array $bindings = [])
     * @method _CustomKeyCollection|CustomKey[] get(array|string $columns = ['*'])
     * @method CustomKey getModel()
     * @method CustomKey[] getModels(array|string $columns = ['*'])
     * @method _CustomKeyCollection|CustomKey[] hydrate(array $items)
     * @method CustomKey make(array $attributes = [])
     * @method CustomKey newModelInstance(array $attributes = [])
     * @method CustomKey updateOrCreate(array $attributes, array $values = [])
     */
    class _CustomKeyQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method Discussion shift()
     * @method Discussion pop()
     * @method Discussion get($key, $default = null)
     * @method Discussion pull($key, $default = null)
     * @method Discussion first(callable $callback = null, $default = null)
     * @method Discussion firstWhere(string $key, $operator = null, $value = null)
     * @method Discussion[] all()
     * @method Discussion last(callable $callback = null, $default = null)
     * @property-read _DiscussionCollectionProxy $keyBy
     * @property-read _DiscussionCollectionProxy $max
     * @property-read _DiscussionCollectionProxy $partition
     * @property-read _DiscussionCollectionProxy $average
     * @property-read _DiscussionCollectionProxy $flatMap
     * @property-read _DiscussionCollectionProxy $each
     * @property-read _DiscussionCollectionProxy $some
     * @property-read _DiscussionCollectionProxy $map
     * @property-read _DiscussionCollectionProxy $sortByDesc
     * @property-read _DiscussionCollectionProxy $filter
     * @property-read _DiscussionCollectionProxy $avg
     * @property-read _DiscussionCollectionProxy $unique
     * @property-read _DiscussionCollectionProxy $first
     * @property-read _DiscussionCollectionProxy $min
     * @property-read _DiscussionCollectionProxy $groupBy
     * @property-read _DiscussionCollectionProxy $reject
     * @property-read _DiscussionCollectionProxy $sortBy
     * @property-read _DiscussionCollectionProxy $contains
     * @property-read _DiscussionCollectionProxy $sum
     * @property-read _DiscussionCollectionProxy $until
     * @property-read _DiscussionCollectionProxy $every
     */
    class _DiscussionCollection extends _BaseCollection
    {
        /**
         * @param  int  $size
         * @return Discussion[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _DiscussionCollection|mixed $id
     * @property _DiscussionCollection|mixed $user_id
     * @property _DiscussionCollection|mixed $title
     * @property _DiscussionCollection|mixed $body
     * @property _DiscussionCollection|mixed $created_at
     * @property _DiscussionCollection|mixed $updated_at
     * @property _DiscussionCollection|mixed $user
     * @property _DiscussionCollection|mixed $user
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _DiscussionCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _DiscussionCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _DiscussionCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _DiscussionCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _DiscussionCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _DiscussionCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _DiscussionCollection delete()
     */
    class _DiscussionCollectionProxy
    {
    }

    /**
     * @method _DiscussionQueryBuilder whereId($value)
     * @method _DiscussionQueryBuilder whereUserId($value)
     * @method _DiscussionQueryBuilder whereTitle($value)
     * @method _DiscussionQueryBuilder whereBody($value)
     * @method _DiscussionQueryBuilder whereCreatedAt($value)
     * @method _DiscussionQueryBuilder whereUpdatedAt($value)
     * @method Discussion create(array $attributes = [])
     * @method _DiscussionCollection|Discussion[] cursor()
     * @method Discussion|null find($id, array $columns = ['*'])
     * @method _DiscussionCollection|Discussion[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Discussion findOrFail($id, array $columns = ['*'])
     * @method _DiscussionCollection|Discussion[] findOrNew($id, array $columns = ['*'])
     * @method Discussion first(array|string $columns = ['*'])
     * @method Discussion firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Discussion firstOrCreate(array $attributes, array $values = [])
     * @method Discussion firstOrFail(array $columns = ['*'])
     * @method Discussion firstOrNew(array $attributes = [], array $values = [])
     * @method Discussion firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Discussion forceCreate(array $attributes)
     * @method _DiscussionCollection|Discussion[] fromQuery(string $query, array $bindings = [])
     * @method _DiscussionCollection|Discussion[] get(array|string $columns = ['*'])
     * @method Discussion getModel()
     * @method Discussion[] getModels(array|string $columns = ['*'])
     * @method _DiscussionCollection|Discussion[] hydrate(array $items)
     * @method Discussion make(array $attributes = [])
     * @method Discussion newModelInstance(array $attributes = [])
     * @method Discussion updateOrCreate(array $attributes, array $values = [])
     */
    class _DiscussionQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method File shift()
     * @method File pop()
     * @method File get($key, $default = null)
     * @method File pull($key, $default = null)
     * @method File first(callable $callback = null, $default = null)
     * @method File firstWhere(string $key, $operator = null, $value = null)
     * @method File[] all()
     * @method File last(callable $callback = null, $default = null)
     * @property-read _FileCollectionProxy $keyBy
     * @property-read _FileCollectionProxy $max
     * @property-read _FileCollectionProxy $partition
     * @property-read _FileCollectionProxy $average
     * @property-read _FileCollectionProxy $flatMap
     * @property-read _FileCollectionProxy $each
     * @property-read _FileCollectionProxy $some
     * @property-read _FileCollectionProxy $map
     * @property-read _FileCollectionProxy $sortByDesc
     * @property-read _FileCollectionProxy $filter
     * @property-read _FileCollectionProxy $avg
     * @property-read _FileCollectionProxy $unique
     * @property-read _FileCollectionProxy $first
     * @property-read _FileCollectionProxy $min
     * @property-read _FileCollectionProxy $groupBy
     * @property-read _FileCollectionProxy $reject
     * @property-read _FileCollectionProxy $sortBy
     * @property-read _FileCollectionProxy $contains
     * @property-read _FileCollectionProxy $sum
     * @property-read _FileCollectionProxy $until
     * @property-read _FileCollectionProxy $every
     */
    class _FileCollection extends _BaseCollection
    {
        /**
         * @param  int  $size
         * @return File[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _FileCollection|mixed $id
     * @property _FileCollection|mixed $name
     * @property _FileCollection|mixed $avatar
     * @property _FileCollection|mixed $original_name
     * @property _FileCollection|mixed $size
     * @property _FileCollection|mixed $created_at
     * @property _FileCollection|mixed $updated_at
     * @see \Laravel\Nova\Tests\Fixtures\File::setFilesAttribute
     * @method _FileCollection setFilesAttribute($value)
     * @see \Laravel\Nova\Actions\Actionable::actions
     * @method _FileCollection actions()
     * @see \Laravel\Nova\Actions\Actionable::actions
     * @method _FileCollection actions()
     * @see \Laravel\Nova\Tests\Fixtures\File::setFilesAttribute
     * @method _FileCollection setFilesAttribute($value)
     * @see \Laravel\Nova\Actions\Actionable::actions
     * @method _FileCollection actions()
     * @see \Laravel\Nova\Actions\Actionable::actions
     * @method _FileCollection actions()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _FileCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _FileCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _FileCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _FileCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _FileCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _FileCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _FileCollection delete()
     */
    class _FileCollectionProxy
    {
    }

    /**
     * @method _FileQueryBuilder whereId($value)
     * @method _FileQueryBuilder whereName($value)
     * @method _FileQueryBuilder whereAvatar($value)
     * @method _FileQueryBuilder whereOriginalName($value)
     * @method _FileQueryBuilder whereSize($value)
     * @method _FileQueryBuilder whereCreatedAt($value)
     * @method _FileQueryBuilder whereUpdatedAt($value)
     * @method File create(array $attributes = [])
     * @method _FileCollection|File[] cursor()
     * @method File|null find($id, array $columns = ['*'])
     * @method _FileCollection|File[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method File findOrFail($id, array $columns = ['*'])
     * @method _FileCollection|File[] findOrNew($id, array $columns = ['*'])
     * @method File first(array|string $columns = ['*'])
     * @method File firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method File firstOrCreate(array $attributes, array $values = [])
     * @method File firstOrFail(array $columns = ['*'])
     * @method File firstOrNew(array $attributes = [], array $values = [])
     * @method File firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method File forceCreate(array $attributes)
     * @method _FileCollection|File[] fromQuery(string $query, array $bindings = [])
     * @method _FileCollection|File[] get(array|string $columns = ['*'])
     * @method File getModel()
     * @method File[] getModels(array|string $columns = ['*'])
     * @method _FileCollection|File[] hydrate(array $items)
     * @method File make(array $attributes = [])
     * @method File newModelInstance(array $attributes = [])
     * @method File updateOrCreate(array $attributes, array $values = [])
     */
    class _FileQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method Post shift()
     * @method Post pop()
     * @method Post get($key, $default = null)
     * @method Post pull($key, $default = null)
     * @method Post first(callable $callback = null, $default = null)
     * @method Post firstWhere(string $key, $operator = null, $value = null)
     * @method Post[] all()
     * @method Post last(callable $callback = null, $default = null)
     * @property-read _PostCollectionProxy $keyBy
     * @property-read _PostCollectionProxy $max
     * @property-read _PostCollectionProxy $partition
     * @property-read _PostCollectionProxy $average
     * @property-read _PostCollectionProxy $flatMap
     * @property-read _PostCollectionProxy $each
     * @property-read _PostCollectionProxy $some
     * @property-read _PostCollectionProxy $map
     * @property-read _PostCollectionProxy $sortByDesc
     * @property-read _PostCollectionProxy $filter
     * @property-read _PostCollectionProxy $avg
     * @property-read _PostCollectionProxy $unique
     * @property-read _PostCollectionProxy $first
     * @property-read _PostCollectionProxy $min
     * @property-read _PostCollectionProxy $groupBy
     * @property-read _PostCollectionProxy $reject
     * @property-read _PostCollectionProxy $sortBy
     * @property-read _PostCollectionProxy $contains
     * @property-read _PostCollectionProxy $sum
     * @property-read _PostCollectionProxy $until
     * @property-read _PostCollectionProxy $every
     */
    class _PostCollection extends _BaseCollection
    {
        /**
         * @param  int  $size
         * @return Post[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _PostCollection|mixed $id
     * @property _PostCollection|mixed $user_id
     * @property _PostCollection|mixed $title
     * @property _PostCollection|mixed $slug
     * @property _PostCollection|mixed $description
     * @property _PostCollection|mixed $word_count
     * @property _PostCollection|mixed $published_at
     * @property _PostCollection|mixed $created_at
     * @property _PostCollection|mixed $updated_at
     * @property _PostCollection|mixed $user
     * @property _PostCollection|mixed $user
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _PostCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _PostCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _PostCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _PostCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _PostCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _PostCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _PostCollection delete()
     */
    class _PostCollectionProxy
    {
    }

    /**
     * @method _PostQueryBuilder whereId($value)
     * @method _PostQueryBuilder whereUserId($value)
     * @method _PostQueryBuilder whereTitle($value)
     * @method _PostQueryBuilder whereSlug($value)
     * @method _PostQueryBuilder whereDescription($value)
     * @method _PostQueryBuilder whereWordCount($value)
     * @method _PostQueryBuilder wherePublishedAt($value)
     * @method _PostQueryBuilder whereCreatedAt($value)
     * @method _PostQueryBuilder whereUpdatedAt($value)
     * @method Post create(array $attributes = [])
     * @method _PostCollection|Post[] cursor()
     * @method Post|null find($id, array $columns = ['*'])
     * @method _PostCollection|Post[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Post findOrFail($id, array $columns = ['*'])
     * @method _PostCollection|Post[] findOrNew($id, array $columns = ['*'])
     * @method Post first(array|string $columns = ['*'])
     * @method Post firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Post firstOrCreate(array $attributes, array $values = [])
     * @method Post firstOrFail(array $columns = ['*'])
     * @method Post firstOrNew(array $attributes = [], array $values = [])
     * @method Post firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Post forceCreate(array $attributes)
     * @method _PostCollection|Post[] fromQuery(string $query, array $bindings = [])
     * @method _PostCollection|Post[] get(array|string $columns = ['*'])
     * @method Post getModel()
     * @method Post[] getModels(array|string $columns = ['*'])
     * @method _PostCollection|Post[] hydrate(array $items)
     * @method Post make(array $attributes = [])
     * @method Post newModelInstance(array $attributes = [])
     * @method Post updateOrCreate(array $attributes, array $values = [])
     */
    class _PostQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method PostWithCustomCreatedAt shift()
     * @method PostWithCustomCreatedAt pop()
     * @method PostWithCustomCreatedAt get($key, $default = null)
     * @method PostWithCustomCreatedAt pull($key, $default = null)
     * @method PostWithCustomCreatedAt first(callable $callback = null, $default = null)
     * @method PostWithCustomCreatedAt firstWhere(string $key, $operator = null, $value = null)
     * @method PostWithCustomCreatedAt[] all()
     * @method PostWithCustomCreatedAt last(callable $callback = null, $default = null)
     * @property-read _PostWithCustomCreatedAtCollectionProxy $keyBy
     * @property-read _PostWithCustomCreatedAtCollectionProxy $max
     * @property-read _PostWithCustomCreatedAtCollectionProxy $partition
     * @property-read _PostWithCustomCreatedAtCollectionProxy $average
     * @property-read _PostWithCustomCreatedAtCollectionProxy $flatMap
     * @property-read _PostWithCustomCreatedAtCollectionProxy $each
     * @property-read _PostWithCustomCreatedAtCollectionProxy $some
     * @property-read _PostWithCustomCreatedAtCollectionProxy $map
     * @property-read _PostWithCustomCreatedAtCollectionProxy $sortByDesc
     * @property-read _PostWithCustomCreatedAtCollectionProxy $filter
     * @property-read _PostWithCustomCreatedAtCollectionProxy $avg
     * @property-read _PostWithCustomCreatedAtCollectionProxy $unique
     * @property-read _PostWithCustomCreatedAtCollectionProxy $first
     * @property-read _PostWithCustomCreatedAtCollectionProxy $min
     * @property-read _PostWithCustomCreatedAtCollectionProxy $groupBy
     * @property-read _PostWithCustomCreatedAtCollectionProxy $reject
     * @property-read _PostWithCustomCreatedAtCollectionProxy $sortBy
     * @property-read _PostWithCustomCreatedAtCollectionProxy $contains
     * @property-read _PostWithCustomCreatedAtCollectionProxy $sum
     * @property-read _PostWithCustomCreatedAtCollectionProxy $until
     * @property-read _PostWithCustomCreatedAtCollectionProxy $every
     */
    class _PostWithCustomCreatedAtCollection extends _BaseCollection
    {
        /**
         * @param  int  $size
         * @return PostWithCustomCreatedAt[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _PostWithCustomCreatedAtCollection|mixed $id
     * @property _PostWithCustomCreatedAtCollection|mixed $user_id
     * @property _PostWithCustomCreatedAtCollection|mixed $title
     * @property _PostWithCustomCreatedAtCollection|mixed $slug
     * @property _PostWithCustomCreatedAtCollection|mixed $description
     * @property _PostWithCustomCreatedAtCollection|mixed $word_count
     * @property _PostWithCustomCreatedAtCollection|mixed $published_at
     * @property _PostWithCustomCreatedAtCollection|mixed $created_at
     * @property _PostWithCustomCreatedAtCollection|mixed $updated_at
     * @property _PostWithCustomCreatedAtCollection|mixed $user
     * @property _PostWithCustomCreatedAtCollection|mixed $user
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _PostWithCustomCreatedAtCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _PostWithCustomCreatedAtCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _PostWithCustomCreatedAtCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _PostWithCustomCreatedAtCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _PostWithCustomCreatedAtCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _PostWithCustomCreatedAtCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _PostWithCustomCreatedAtCollection delete()
     */
    class _PostWithCustomCreatedAtCollectionProxy
    {
    }

    /**
     * @method _PostWithCustomCreatedAtQueryBuilder whereId($value)
     * @method _PostWithCustomCreatedAtQueryBuilder whereUserId($value)
     * @method _PostWithCustomCreatedAtQueryBuilder whereTitle($value)
     * @method _PostWithCustomCreatedAtQueryBuilder whereSlug($value)
     * @method _PostWithCustomCreatedAtQueryBuilder whereDescription($value)
     * @method _PostWithCustomCreatedAtQueryBuilder whereWordCount($value)
     * @method _PostWithCustomCreatedAtQueryBuilder wherePublishedAt($value)
     * @method _PostWithCustomCreatedAtQueryBuilder whereCreatedAt($value)
     * @method _PostWithCustomCreatedAtQueryBuilder whereUpdatedAt($value)
     * @method PostWithCustomCreatedAt create(array $attributes = [])
     * @method _PostWithCustomCreatedAtCollection|PostWithCustomCreatedAt[] cursor()
     * @method PostWithCustomCreatedAt|null find($id, array $columns = ['*'])
     * @method _PostWithCustomCreatedAtCollection|PostWithCustomCreatedAt[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method PostWithCustomCreatedAt findOrFail($id, array $columns = ['*'])
     * @method _PostWithCustomCreatedAtCollection|PostWithCustomCreatedAt[] findOrNew($id, array $columns = ['*'])
     * @method PostWithCustomCreatedAt first(array|string $columns = ['*'])
     * @method PostWithCustomCreatedAt firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method PostWithCustomCreatedAt firstOrCreate(array $attributes, array $values = [])
     * @method PostWithCustomCreatedAt firstOrFail(array $columns = ['*'])
     * @method PostWithCustomCreatedAt firstOrNew(array $attributes = [], array $values = [])
     * @method PostWithCustomCreatedAt firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PostWithCustomCreatedAt forceCreate(array $attributes)
     * @method _PostWithCustomCreatedAtCollection|PostWithCustomCreatedAt[] fromQuery(string $query, array $bindings = [])
     * @method _PostWithCustomCreatedAtCollection|PostWithCustomCreatedAt[] get(array|string $columns = ['*'])
     * @method PostWithCustomCreatedAt getModel()
     * @method PostWithCustomCreatedAt[] getModels(array|string $columns = ['*'])
     * @method _PostWithCustomCreatedAtCollection|PostWithCustomCreatedAt[] hydrate(array $items)
     * @method PostWithCustomCreatedAt make(array $attributes = [])
     * @method PostWithCustomCreatedAt newModelInstance(array $attributes = [])
     * @method PostWithCustomCreatedAt updateOrCreate(array $attributes, array $values = [])
     */
    class _PostWithCustomCreatedAtQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method Profile shift()
     * @method Profile pop()
     * @method Profile get($key, $default = null)
     * @method Profile pull($key, $default = null)
     * @method Profile first(callable $callback = null, $default = null)
     * @method Profile firstWhere(string $key, $operator = null, $value = null)
     * @method Profile[] all()
     * @method Profile last(callable $callback = null, $default = null)
     * @property-read _ProfileCollectionProxy $keyBy
     * @property-read _ProfileCollectionProxy $max
     * @property-read _ProfileCollectionProxy $partition
     * @property-read _ProfileCollectionProxy $average
     * @property-read _ProfileCollectionProxy $flatMap
     * @property-read _ProfileCollectionProxy $each
     * @property-read _ProfileCollectionProxy $some
     * @property-read _ProfileCollectionProxy $map
     * @property-read _ProfileCollectionProxy $sortByDesc
     * @property-read _ProfileCollectionProxy $filter
     * @property-read _ProfileCollectionProxy $avg
     * @property-read _ProfileCollectionProxy $unique
     * @property-read _ProfileCollectionProxy $first
     * @property-read _ProfileCollectionProxy $min
     * @property-read _ProfileCollectionProxy $groupBy
     * @property-read _ProfileCollectionProxy $reject
     * @property-read _ProfileCollectionProxy $sortBy
     * @property-read _ProfileCollectionProxy $contains
     * @property-read _ProfileCollectionProxy $sum
     * @property-read _ProfileCollectionProxy $until
     * @property-read _ProfileCollectionProxy $every
     */
    class _ProfileCollection extends _BaseCollection
    {
        /**
         * @param  int  $size
         * @return Profile[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _ProfileCollection|mixed $id
     * @property _ProfileCollection|mixed $user_id
     * @property _ProfileCollection|mixed $phone
     * @property _ProfileCollection|mixed $created_at
     * @property _ProfileCollection|mixed $updated_at
     * @property _ProfileCollection|mixed $user
     * @property _ProfileCollection|mixed $user
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _ProfileCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _ProfileCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _ProfileCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _ProfileCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _ProfileCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _ProfileCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _ProfileCollection delete()
     */
    class _ProfileCollectionProxy
    {
    }

    /**
     * @method _ProfileQueryBuilder whereId($value)
     * @method _ProfileQueryBuilder whereUserId($value)
     * @method _ProfileQueryBuilder wherePhone($value)
     * @method _ProfileQueryBuilder whereCreatedAt($value)
     * @method _ProfileQueryBuilder whereUpdatedAt($value)
     * @method Profile create(array $attributes = [])
     * @method _ProfileCollection|Profile[] cursor()
     * @method Profile|null find($id, array $columns = ['*'])
     * @method _ProfileCollection|Profile[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Profile findOrFail($id, array $columns = ['*'])
     * @method _ProfileCollection|Profile[] findOrNew($id, array $columns = ['*'])
     * @method Profile first(array|string $columns = ['*'])
     * @method Profile firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Profile firstOrCreate(array $attributes, array $values = [])
     * @method Profile firstOrFail(array $columns = ['*'])
     * @method Profile firstOrNew(array $attributes = [], array $values = [])
     * @method Profile firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Profile forceCreate(array $attributes)
     * @method _ProfileCollection|Profile[] fromQuery(string $query, array $bindings = [])
     * @method _ProfileCollection|Profile[] get(array|string $columns = ['*'])
     * @method Profile getModel()
     * @method Profile[] getModels(array|string $columns = ['*'])
     * @method _ProfileCollection|Profile[] hydrate(array $items)
     * @method Profile make(array $attributes = [])
     * @method Profile newModelInstance(array $attributes = [])
     * @method Profile updateOrCreate(array $attributes, array $values = [])
     */
    class _ProfileQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method Recipient shift()
     * @method Recipient pop()
     * @method Recipient get($key, $default = null)
     * @method Recipient pull($key, $default = null)
     * @method Recipient first(callable $callback = null, $default = null)
     * @method Recipient firstWhere(string $key, $operator = null, $value = null)
     * @method Recipient[] all()
     * @method Recipient last(callable $callback = null, $default = null)
     * @property-read _RecipientCollectionProxy $keyBy
     * @property-read _RecipientCollectionProxy $max
     * @property-read _RecipientCollectionProxy $partition
     * @property-read _RecipientCollectionProxy $average
     * @property-read _RecipientCollectionProxy $flatMap
     * @property-read _RecipientCollectionProxy $each
     * @property-read _RecipientCollectionProxy $some
     * @property-read _RecipientCollectionProxy $map
     * @property-read _RecipientCollectionProxy $sortByDesc
     * @property-read _RecipientCollectionProxy $filter
     * @property-read _RecipientCollectionProxy $avg
     * @property-read _RecipientCollectionProxy $unique
     * @property-read _RecipientCollectionProxy $first
     * @property-read _RecipientCollectionProxy $min
     * @property-read _RecipientCollectionProxy $groupBy
     * @property-read _RecipientCollectionProxy $reject
     * @property-read _RecipientCollectionProxy $sortBy
     * @property-read _RecipientCollectionProxy $contains
     * @property-read _RecipientCollectionProxy $sum
     * @property-read _RecipientCollectionProxy $until
     * @property-read _RecipientCollectionProxy $every
     */
    class _RecipientCollection extends _BaseCollection
    {
        /**
         * @param  int  $size
         * @return Recipient[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _RecipientCollection|mixed $id
     * @property _RecipientCollection|mixed $email
     * @property _RecipientCollection|mixed $name
     * @property _RecipientCollection|mixed $created_at
     * @property _RecipientCollection|mixed $updated_at
     * @property _RecipientCollection|mixed $user
     * @property _RecipientCollection|mixed $user
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _RecipientCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _RecipientCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _RecipientCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _RecipientCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _RecipientCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _RecipientCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _RecipientCollection delete()
     */
    class _RecipientCollectionProxy
    {
    }

    /**
     * @method _RecipientQueryBuilder whereId($value)
     * @method _RecipientQueryBuilder whereEmail($value)
     * @method _RecipientQueryBuilder whereName($value)
     * @method _RecipientQueryBuilder whereCreatedAt($value)
     * @method _RecipientQueryBuilder whereUpdatedAt($value)
     * @method Recipient create(array $attributes = [])
     * @method _RecipientCollection|Recipient[] cursor()
     * @method Recipient|null find($id, array $columns = ['*'])
     * @method _RecipientCollection|Recipient[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Recipient findOrFail($id, array $columns = ['*'])
     * @method _RecipientCollection|Recipient[] findOrNew($id, array $columns = ['*'])
     * @method Recipient first(array|string $columns = ['*'])
     * @method Recipient firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Recipient firstOrCreate(array $attributes, array $values = [])
     * @method Recipient firstOrFail(array $columns = ['*'])
     * @method Recipient firstOrNew(array $attributes = [], array $values = [])
     * @method Recipient firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Recipient forceCreate(array $attributes)
     * @method _RecipientCollection|Recipient[] fromQuery(string $query, array $bindings = [])
     * @method _RecipientCollection|Recipient[] get(array|string $columns = ['*'])
     * @method Recipient getModel()
     * @method Recipient[] getModels(array|string $columns = ['*'])
     * @method _RecipientCollection|Recipient[] hydrate(array $items)
     * @method Recipient make(array $attributes = [])
     * @method Recipient newModelInstance(array $attributes = [])
     * @method Recipient updateOrCreate(array $attributes, array $values = [])
     */
    class _RecipientQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method RoleAssignment shift()
     * @method RoleAssignment pop()
     * @method RoleAssignment get($key, $default = null)
     * @method RoleAssignment pull($key, $default = null)
     * @method RoleAssignment first(callable $callback = null, $default = null)
     * @method RoleAssignment firstWhere(string $key, $operator = null, $value = null)
     * @method RoleAssignment[] all()
     * @method RoleAssignment last(callable $callback = null, $default = null)
     * @property-read _RoleAssignmentCollectionProxy $keyBy
     * @property-read _RoleAssignmentCollectionProxy $max
     * @property-read _RoleAssignmentCollectionProxy $partition
     * @property-read _RoleAssignmentCollectionProxy $average
     * @property-read _RoleAssignmentCollectionProxy $flatMap
     * @property-read _RoleAssignmentCollectionProxy $each
     * @property-read _RoleAssignmentCollectionProxy $some
     * @property-read _RoleAssignmentCollectionProxy $map
     * @property-read _RoleAssignmentCollectionProxy $sortByDesc
     * @property-read _RoleAssignmentCollectionProxy $filter
     * @property-read _RoleAssignmentCollectionProxy $avg
     * @property-read _RoleAssignmentCollectionProxy $unique
     * @property-read _RoleAssignmentCollectionProxy $first
     * @property-read _RoleAssignmentCollectionProxy $min
     * @property-read _RoleAssignmentCollectionProxy $groupBy
     * @property-read _RoleAssignmentCollectionProxy $reject
     * @property-read _RoleAssignmentCollectionProxy $sortBy
     * @property-read _RoleAssignmentCollectionProxy $contains
     * @property-read _RoleAssignmentCollectionProxy $sum
     * @property-read _RoleAssignmentCollectionProxy $until
     * @property-read _RoleAssignmentCollectionProxy $every
     */
    class _RoleAssignmentCollection extends _BaseCollection
    {
        /**
         * @param  int  $size
         * @return RoleAssignment[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _RoleAssignmentCollection|mixed $id
     * @property _RoleAssignmentCollection|mixed $user_id
     * @property _RoleAssignmentCollection|mixed $role_id
     * @property _RoleAssignmentCollection|mixed $admin
     * @property _RoleAssignmentCollection|mixed $pivot-update
     * @property _RoleAssignmentCollection|mixed $photo
     * @property _RoleAssignmentCollection|mixed $restricted
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getQueueableId
     * @method _RoleAssignmentCollection getQueueableId()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getCreatedAtColumn
     * @method _RoleAssignmentCollection getCreatedAtColumn()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getTable
     * @method _RoleAssignmentCollection getTable()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::delete
     * @method _RoleAssignmentCollection delete()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getForeignKey
     * @method _RoleAssignmentCollection getForeignKey()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::unsetRelations
     * @method _RoleAssignmentCollection unsetRelations()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::newQueryForRestoration
     * @method _RoleAssignmentCollection newQueryForRestoration(int[]|string|string[] $ids)
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::hasTimestampAttributes
     * @method _RoleAssignmentCollection hasTimestampAttributes(array|null $attributes = null)
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::setPivotKeys
     * @method _RoleAssignmentCollection setPivotKeys(string $foreignKey, string $relatedKey)
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getOtherKey
     * @method _RoleAssignmentCollection getOtherKey()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getUpdatedAtColumn
     * @method _RoleAssignmentCollection getUpdatedAtColumn()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getRelatedKey
     * @method _RoleAssignmentCollection getRelatedKey()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getQueueableId
     * @method _RoleAssignmentCollection getQueueableId()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getCreatedAtColumn
     * @method _RoleAssignmentCollection getCreatedAtColumn()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getTable
     * @method _RoleAssignmentCollection getTable()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::delete
     * @method _RoleAssignmentCollection delete()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getForeignKey
     * @method _RoleAssignmentCollection getForeignKey()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::unsetRelations
     * @method _RoleAssignmentCollection unsetRelations()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::newQueryForRestoration
     * @method _RoleAssignmentCollection newQueryForRestoration(int[]|string|string[] $ids)
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::hasTimestampAttributes
     * @method _RoleAssignmentCollection hasTimestampAttributes(array|null $attributes = null)
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::setPivotKeys
     * @method _RoleAssignmentCollection setPivotKeys(string $foreignKey, string $relatedKey)
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getOtherKey
     * @method _RoleAssignmentCollection getOtherKey()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getUpdatedAtColumn
     * @method _RoleAssignmentCollection getUpdatedAtColumn()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getRelatedKey
     * @method _RoleAssignmentCollection getRelatedKey()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _RoleAssignmentCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _RoleAssignmentCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _RoleAssignmentCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _RoleAssignmentCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _RoleAssignmentCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _RoleAssignmentCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _RoleAssignmentCollection delete()
     */
    class _RoleAssignmentCollectionProxy
    {
    }

    /**
     * @method _RoleAssignmentQueryBuilder whereId($value)
     * @method _RoleAssignmentQueryBuilder whereUserId($value)
     * @method _RoleAssignmentQueryBuilder whereRoleId($value)
     * @method _RoleAssignmentQueryBuilder whereAdmin($value)
     * @method _RoleAssignmentQueryBuilder wherePivot-update($value)
     * @method _RoleAssignmentQueryBuilder wherePhoto($value)
     * @method _RoleAssignmentQueryBuilder whereRestricted($value)
     * @method RoleAssignment create(array $attributes = [])
     * @method _RoleAssignmentCollection|RoleAssignment[] cursor()
     * @method RoleAssignment|null find($id, array $columns = ['*'])
     * @method _RoleAssignmentCollection|RoleAssignment[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method RoleAssignment findOrFail($id, array $columns = ['*'])
     * @method _RoleAssignmentCollection|RoleAssignment[] findOrNew($id, array $columns = ['*'])
     * @method RoleAssignment first(array|string $columns = ['*'])
     * @method RoleAssignment firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method RoleAssignment firstOrCreate(array $attributes, array $values = [])
     * @method RoleAssignment firstOrFail(array $columns = ['*'])
     * @method RoleAssignment firstOrNew(array $attributes = [], array $values = [])
     * @method RoleAssignment firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method RoleAssignment forceCreate(array $attributes)
     * @method _RoleAssignmentCollection|RoleAssignment[] fromQuery(string $query, array $bindings = [])
     * @method _RoleAssignmentCollection|RoleAssignment[] get(array|string $columns = ['*'])
     * @method RoleAssignment getModel()
     * @method RoleAssignment[] getModels(array|string $columns = ['*'])
     * @method _RoleAssignmentCollection|RoleAssignment[] hydrate(array $items)
     * @method RoleAssignment make(array $attributes = [])
     * @method RoleAssignment newModelInstance(array $attributes = [])
     * @method RoleAssignment updateOrCreate(array $attributes, array $values = [])
     */
    class _RoleAssignmentQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method Role shift()
     * @method Role pop()
     * @method Role get($key, $default = null)
     * @method Role pull($key, $default = null)
     * @method Role first(callable $callback = null, $default = null)
     * @method Role firstWhere(string $key, $operator = null, $value = null)
     * @method Role[] all()
     * @method Role last(callable $callback = null, $default = null)
     * @property-read _RoleCollectionProxy $keyBy
     * @property-read _RoleCollectionProxy $max
     * @property-read _RoleCollectionProxy $partition
     * @property-read _RoleCollectionProxy $average
     * @property-read _RoleCollectionProxy $flatMap
     * @property-read _RoleCollectionProxy $each
     * @property-read _RoleCollectionProxy $some
     * @property-read _RoleCollectionProxy $map
     * @property-read _RoleCollectionProxy $sortByDesc
     * @property-read _RoleCollectionProxy $filter
     * @property-read _RoleCollectionProxy $avg
     * @property-read _RoleCollectionProxy $unique
     * @property-read _RoleCollectionProxy $first
     * @property-read _RoleCollectionProxy $min
     * @property-read _RoleCollectionProxy $groupBy
     * @property-read _RoleCollectionProxy $reject
     * @property-read _RoleCollectionProxy $sortBy
     * @property-read _RoleCollectionProxy $contains
     * @property-read _RoleCollectionProxy $sum
     * @property-read _RoleCollectionProxy $until
     * @property-read _RoleCollectionProxy $every
     */
    class _RoleCollection extends _BaseCollection
    {
        /**
         * @param  int  $size
         * @return Role[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _RoleCollection|mixed $id
     * @property _RoleCollection|mixed $created_by_id
     * @property _RoleCollection|mixed $name
     * @property _RoleCollection|mixed $created_at
     * @property _RoleCollection|mixed $updated_at
     * @property _RoleCollection|mixed $createdBy
     * @property _RoleCollection|mixed $createdBy
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _RoleCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _RoleCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _RoleCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _RoleCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _RoleCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _RoleCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _RoleCollection delete()
     */
    class _RoleCollectionProxy
    {
    }

    /**
     * @method _RoleQueryBuilder whereId($value)
     * @method _RoleQueryBuilder whereCreatedById($value)
     * @method _RoleQueryBuilder whereName($value)
     * @method _RoleQueryBuilder whereCreatedAt($value)
     * @method _RoleQueryBuilder whereUpdatedAt($value)
     * @method Role create(array $attributes = [])
     * @method _RoleCollection|Role[] cursor()
     * @method Role|null find($id, array $columns = ['*'])
     * @method _RoleCollection|Role[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Role findOrFail($id, array $columns = ['*'])
     * @method _RoleCollection|Role[] findOrNew($id, array $columns = ['*'])
     * @method Role first(array|string $columns = ['*'])
     * @method Role firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Role firstOrCreate(array $attributes, array $values = [])
     * @method Role firstOrFail(array $columns = ['*'])
     * @method Role firstOrNew(array $attributes = [], array $values = [])
     * @method Role firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Role forceCreate(array $attributes)
     * @method _RoleCollection|Role[] fromQuery(string $query, array $bindings = [])
     * @method _RoleCollection|Role[] get(array|string $columns = ['*'])
     * @method Role getModel()
     * @method Role[] getModels(array|string $columns = ['*'])
     * @method _RoleCollection|Role[] hydrate(array $items)
     * @method Role make(array $attributes = [])
     * @method Role newModelInstance(array $attributes = [])
     * @method Role updateOrCreate(array $attributes, array $values = [])
     */
    class _RoleQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method SoftDeletingFile shift()
     * @method SoftDeletingFile pop()
     * @method SoftDeletingFile get($key, $default = null)
     * @method SoftDeletingFile pull($key, $default = null)
     * @method SoftDeletingFile first(callable $callback = null, $default = null)
     * @method SoftDeletingFile firstWhere(string $key, $operator = null, $value = null)
     * @method SoftDeletingFile[] all()
     * @method SoftDeletingFile last(callable $callback = null, $default = null)
     * @property-read _SoftDeletingFileCollectionProxy $keyBy
     * @property-read _SoftDeletingFileCollectionProxy $max
     * @property-read _SoftDeletingFileCollectionProxy $partition
     * @property-read _SoftDeletingFileCollectionProxy $average
     * @property-read _SoftDeletingFileCollectionProxy $flatMap
     * @property-read _SoftDeletingFileCollectionProxy $each
     * @property-read _SoftDeletingFileCollectionProxy $some
     * @property-read _SoftDeletingFileCollectionProxy $map
     * @property-read _SoftDeletingFileCollectionProxy $sortByDesc
     * @property-read _SoftDeletingFileCollectionProxy $filter
     * @property-read _SoftDeletingFileCollectionProxy $avg
     * @property-read _SoftDeletingFileCollectionProxy $unique
     * @property-read _SoftDeletingFileCollectionProxy $first
     * @property-read _SoftDeletingFileCollectionProxy $min
     * @property-read _SoftDeletingFileCollectionProxy $groupBy
     * @property-read _SoftDeletingFileCollectionProxy $reject
     * @property-read _SoftDeletingFileCollectionProxy $sortBy
     * @property-read _SoftDeletingFileCollectionProxy $contains
     * @property-read _SoftDeletingFileCollectionProxy $sum
     * @property-read _SoftDeletingFileCollectionProxy $until
     * @property-read _SoftDeletingFileCollectionProxy $every
     */
    class _SoftDeletingFileCollection extends _BaseCollection
    {
        /**
         * @param  int  $size
         * @return SoftDeletingFile[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _SoftDeletingFileCollection|mixed $id
     * @property _SoftDeletingFileCollection|mixed $name
     * @property _SoftDeletingFileCollection|mixed $avatar
     * @property _SoftDeletingFileCollection|mixed $created_at
     * @property _SoftDeletingFileCollection|mixed $updated_at
     * @property _SoftDeletingFileCollection|mixed $deleted_at
     * @see \Illuminate\Database\Eloquent\SoftDeletes::isForceDeleting
     * @method _SoftDeletingFileCollection isForceDeleting()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::trashed
     * @method _SoftDeletingFileCollection trashed()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::getQualifiedDeletedAtColumn
     * @method _SoftDeletingFileCollection getQualifiedDeletedAtColumn()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::restore
     * @method _SoftDeletingFileCollection restore()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::getDeletedAtColumn
     * @method _SoftDeletingFileCollection getDeletedAtColumn()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::forceDelete
     * @method _SoftDeletingFileCollection forceDelete()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::isForceDeleting
     * @method _SoftDeletingFileCollection isForceDeleting()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::trashed
     * @method _SoftDeletingFileCollection trashed()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::getQualifiedDeletedAtColumn
     * @method _SoftDeletingFileCollection getQualifiedDeletedAtColumn()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::restore
     * @method _SoftDeletingFileCollection restore()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::getDeletedAtColumn
     * @method _SoftDeletingFileCollection getDeletedAtColumn()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::forceDelete
     * @method _SoftDeletingFileCollection forceDelete()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _SoftDeletingFileCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _SoftDeletingFileCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _SoftDeletingFileCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _SoftDeletingFileCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _SoftDeletingFileCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _SoftDeletingFileCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _SoftDeletingFileCollection delete()
     */
    class _SoftDeletingFileCollectionProxy
    {
    }

    /**
     * @method _SoftDeletingFileQueryBuilder whereId($value)
     * @method _SoftDeletingFileQueryBuilder whereName($value)
     * @method _SoftDeletingFileQueryBuilder whereAvatar($value)
     * @method _SoftDeletingFileQueryBuilder whereCreatedAt($value)
     * @method _SoftDeletingFileQueryBuilder whereUpdatedAt($value)
     * @method _SoftDeletingFileQueryBuilder whereDeletedAt($value)
     * @method SoftDeletingFile create(array $attributes = [])
     * @method _SoftDeletingFileCollection|SoftDeletingFile[] cursor()
     * @method SoftDeletingFile|null find($id, array $columns = ['*'])
     * @method _SoftDeletingFileCollection|SoftDeletingFile[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method SoftDeletingFile findOrFail($id, array $columns = ['*'])
     * @method _SoftDeletingFileCollection|SoftDeletingFile[] findOrNew($id, array $columns = ['*'])
     * @method SoftDeletingFile first(array|string $columns = ['*'])
     * @method SoftDeletingFile firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method SoftDeletingFile firstOrCreate(array $attributes, array $values = [])
     * @method SoftDeletingFile firstOrFail(array $columns = ['*'])
     * @method SoftDeletingFile firstOrNew(array $attributes = [], array $values = [])
     * @method SoftDeletingFile firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method SoftDeletingFile forceCreate(array $attributes)
     * @method _SoftDeletingFileCollection|SoftDeletingFile[] fromQuery(string $query, array $bindings = [])
     * @method _SoftDeletingFileCollection|SoftDeletingFile[] get(array|string $columns = ['*'])
     * @method SoftDeletingFile getModel()
     * @method SoftDeletingFile[] getModels(array|string $columns = ['*'])
     * @method _SoftDeletingFileCollection|SoftDeletingFile[] hydrate(array $items)
     * @method SoftDeletingFile make(array $attributes = [])
     * @method SoftDeletingFile newModelInstance(array $attributes = [])
     * @method SoftDeletingFile updateOrCreate(array $attributes, array $values = [])
     * @method _SoftDeletingFileQueryBuilder withTrashed()
     * @method _SoftDeletingFileQueryBuilder onlyTrashed()
     * @method _SoftDeletingFileQueryBuilder withoutTrashed()
     */
    class _SoftDeletingFileQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method Tag shift()
     * @method Tag pop()
     * @method Tag get($key, $default = null)
     * @method Tag pull($key, $default = null)
     * @method Tag first(callable $callback = null, $default = null)
     * @method Tag firstWhere(string $key, $operator = null, $value = null)
     * @method Tag[] all()
     * @method Tag last(callable $callback = null, $default = null)
     * @property-read _TagCollectionProxy $keyBy
     * @property-read _TagCollectionProxy $max
     * @property-read _TagCollectionProxy $partition
     * @property-read _TagCollectionProxy $average
     * @property-read _TagCollectionProxy $flatMap
     * @property-read _TagCollectionProxy $each
     * @property-read _TagCollectionProxy $some
     * @property-read _TagCollectionProxy $map
     * @property-read _TagCollectionProxy $sortByDesc
     * @property-read _TagCollectionProxy $filter
     * @property-read _TagCollectionProxy $avg
     * @property-read _TagCollectionProxy $unique
     * @property-read _TagCollectionProxy $first
     * @property-read _TagCollectionProxy $min
     * @property-read _TagCollectionProxy $groupBy
     * @property-read _TagCollectionProxy $reject
     * @property-read _TagCollectionProxy $sortBy
     * @property-read _TagCollectionProxy $contains
     * @property-read _TagCollectionProxy $sum
     * @property-read _TagCollectionProxy $until
     * @property-read _TagCollectionProxy $every
     */
    class _TagCollection extends _BaseCollection
    {
        /**
         * @param  int  $size
         * @return Tag[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _TagCollection|mixed $id
     * @property _TagCollection|mixed $name
     * @property _TagCollection|mixed $created_at
     * @property _TagCollection|mixed $updated_at
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _TagCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _TagCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _TagCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _TagCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _TagCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _TagCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _TagCollection delete()
     */
    class _TagCollectionProxy
    {
    }

    /**
     * @method _TagQueryBuilder whereId($value)
     * @method _TagQueryBuilder whereName($value)
     * @method _TagQueryBuilder whereCreatedAt($value)
     * @method _TagQueryBuilder whereUpdatedAt($value)
     * @method Tag create(array $attributes = [])
     * @method _TagCollection|Tag[] cursor()
     * @method Tag|null find($id, array $columns = ['*'])
     * @method _TagCollection|Tag[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Tag findOrFail($id, array $columns = ['*'])
     * @method _TagCollection|Tag[] findOrNew($id, array $columns = ['*'])
     * @method Tag first(array|string $columns = ['*'])
     * @method Tag firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Tag firstOrCreate(array $attributes, array $values = [])
     * @method Tag firstOrFail(array $columns = ['*'])
     * @method Tag firstOrNew(array $attributes = [], array $values = [])
     * @method Tag firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Tag forceCreate(array $attributes)
     * @method _TagCollection|Tag[] fromQuery(string $query, array $bindings = [])
     * @method _TagCollection|Tag[] get(array|string $columns = ['*'])
     * @method Tag getModel()
     * @method Tag[] getModels(array|string $columns = ['*'])
     * @method _TagCollection|Tag[] hydrate(array $items)
     * @method Tag make(array $attributes = [])
     * @method Tag newModelInstance(array $attributes = [])
     * @method Tag updateOrCreate(array $attributes, array $values = [])
     */
    class _TagQueryBuilder extends _BaseBuilder
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
     * @property _UserCollection|mixed $weight
     * @property _UserCollection|mixed $restricted
     * @property _UserCollection|mixed $meta
     * @property _UserCollection|mixed $deleted_at
     * @property _UserCollection|mixed $address
     * @property _UserCollection|mixed $address
     * @property _UserCollection|mixed $profile
     * @property _UserCollection|mixed $profile
     * @see \Laravel\Nova\Tests\Fixtures\User::sendPasswordResetNotification
     * @method _UserCollection sendPasswordResetNotification(string $token)
     * @see \Laravel\Nova\Tests\Fixtures\User::userRoles
     * @method _UserCollection userRoles()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::isForceDeleting
     * @method _UserCollection isForceDeleting()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::trashed
     * @method _UserCollection trashed()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::getQualifiedDeletedAtColumn
     * @method _UserCollection getQualifiedDeletedAtColumn()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::restore
     * @method _UserCollection restore()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::getDeletedAtColumn
     * @method _UserCollection getDeletedAtColumn()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::forceDelete
     * @method _UserCollection forceDelete()
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
     * @see \Laravel\Nova\Tests\Fixtures\User::sendPasswordResetNotification
     * @method _UserCollection sendPasswordResetNotification(string $token)
     * @see \Laravel\Nova\Tests\Fixtures\User::userRoles
     * @method _UserCollection userRoles()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::isForceDeleting
     * @method _UserCollection isForceDeleting()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::trashed
     * @method _UserCollection trashed()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::getQualifiedDeletedAtColumn
     * @method _UserCollection getQualifiedDeletedAtColumn()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::restore
     * @method _UserCollection restore()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::getDeletedAtColumn
     * @method _UserCollection getDeletedAtColumn()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::forceDelete
     * @method _UserCollection forceDelete()
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
     * @method UserEmailRelationship shift()
     * @method UserEmailRelationship pop()
     * @method UserEmailRelationship get($key, $default = null)
     * @method UserEmailRelationship pull($key, $default = null)
     * @method UserEmailRelationship first(callable $callback = null, $default = null)
     * @method UserEmailRelationship firstWhere(string $key, $operator = null, $value = null)
     * @method UserEmailRelationship[] all()
     * @method UserEmailRelationship last(callable $callback = null, $default = null)
     * @property-read _UserEmailRelationshipCollectionProxy $keyBy
     * @property-read _UserEmailRelationshipCollectionProxy $max
     * @property-read _UserEmailRelationshipCollectionProxy $partition
     * @property-read _UserEmailRelationshipCollectionProxy $average
     * @property-read _UserEmailRelationshipCollectionProxy $flatMap
     * @property-read _UserEmailRelationshipCollectionProxy $each
     * @property-read _UserEmailRelationshipCollectionProxy $some
     * @property-read _UserEmailRelationshipCollectionProxy $map
     * @property-read _UserEmailRelationshipCollectionProxy $sortByDesc
     * @property-read _UserEmailRelationshipCollectionProxy $filter
     * @property-read _UserEmailRelationshipCollectionProxy $avg
     * @property-read _UserEmailRelationshipCollectionProxy $unique
     * @property-read _UserEmailRelationshipCollectionProxy $first
     * @property-read _UserEmailRelationshipCollectionProxy $min
     * @property-read _UserEmailRelationshipCollectionProxy $groupBy
     * @property-read _UserEmailRelationshipCollectionProxy $reject
     * @property-read _UserEmailRelationshipCollectionProxy $sortBy
     * @property-read _UserEmailRelationshipCollectionProxy $contains
     * @property-read _UserEmailRelationshipCollectionProxy $sum
     * @property-read _UserEmailRelationshipCollectionProxy $until
     * @property-read _UserEmailRelationshipCollectionProxy $every
     */
    class _UserEmailRelationshipCollection extends _BaseCollection
    {
        /**
         * @param  int  $size
         * @return UserEmailRelationship[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _UserEmailRelationshipCollection|mixed $email_from
     * @property _UserEmailRelationshipCollection|mixed $email_to
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getQueueableId
     * @method _UserEmailRelationshipCollection getQueueableId()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getCreatedAtColumn
     * @method _UserEmailRelationshipCollection getCreatedAtColumn()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getTable
     * @method _UserEmailRelationshipCollection getTable()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::delete
     * @method _UserEmailRelationshipCollection delete()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getForeignKey
     * @method _UserEmailRelationshipCollection getForeignKey()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::unsetRelations
     * @method _UserEmailRelationshipCollection unsetRelations()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::newQueryForRestoration
     * @method _UserEmailRelationshipCollection newQueryForRestoration(int[]|string|string[] $ids)
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::hasTimestampAttributes
     * @method _UserEmailRelationshipCollection hasTimestampAttributes(array|null $attributes = null)
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::setPivotKeys
     * @method _UserEmailRelationshipCollection setPivotKeys(string $foreignKey, string $relatedKey)
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getOtherKey
     * @method _UserEmailRelationshipCollection getOtherKey()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getUpdatedAtColumn
     * @method _UserEmailRelationshipCollection getUpdatedAtColumn()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getRelatedKey
     * @method _UserEmailRelationshipCollection getRelatedKey()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getQueueableId
     * @method _UserEmailRelationshipCollection getQueueableId()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getCreatedAtColumn
     * @method _UserEmailRelationshipCollection getCreatedAtColumn()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getTable
     * @method _UserEmailRelationshipCollection getTable()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::delete
     * @method _UserEmailRelationshipCollection delete()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getForeignKey
     * @method _UserEmailRelationshipCollection getForeignKey()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::unsetRelations
     * @method _UserEmailRelationshipCollection unsetRelations()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::newQueryForRestoration
     * @method _UserEmailRelationshipCollection newQueryForRestoration(int[]|string|string[] $ids)
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::hasTimestampAttributes
     * @method _UserEmailRelationshipCollection hasTimestampAttributes(array|null $attributes = null)
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::setPivotKeys
     * @method _UserEmailRelationshipCollection setPivotKeys(string $foreignKey, string $relatedKey)
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getOtherKey
     * @method _UserEmailRelationshipCollection getOtherKey()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getUpdatedAtColumn
     * @method _UserEmailRelationshipCollection getUpdatedAtColumn()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getRelatedKey
     * @method _UserEmailRelationshipCollection getRelatedKey()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _UserEmailRelationshipCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _UserEmailRelationshipCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _UserEmailRelationshipCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _UserEmailRelationshipCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _UserEmailRelationshipCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _UserEmailRelationshipCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _UserEmailRelationshipCollection delete()
     */
    class _UserEmailRelationshipCollectionProxy
    {
    }

    /**
     * @method _UserEmailRelationshipQueryBuilder whereEmailFrom($value)
     * @method _UserEmailRelationshipQueryBuilder whereEmailTo($value)
     * @method UserEmailRelationship create(array $attributes = [])
     * @method _UserEmailRelationshipCollection|UserEmailRelationship[] cursor()
     * @method UserEmailRelationship|null find($id, array $columns = ['*'])
     * @method _UserEmailRelationshipCollection|UserEmailRelationship[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method UserEmailRelationship findOrFail($id, array $columns = ['*'])
     * @method _UserEmailRelationshipCollection|UserEmailRelationship[] findOrNew($id, array $columns = ['*'])
     * @method UserEmailRelationship first(array|string $columns = ['*'])
     * @method UserEmailRelationship firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method UserEmailRelationship firstOrCreate(array $attributes, array $values = [])
     * @method UserEmailRelationship firstOrFail(array $columns = ['*'])
     * @method UserEmailRelationship firstOrNew(array $attributes = [], array $values = [])
     * @method UserEmailRelationship firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UserEmailRelationship forceCreate(array $attributes)
     * @method _UserEmailRelationshipCollection|UserEmailRelationship[] fromQuery(string $query, array $bindings = [])
     * @method _UserEmailRelationshipCollection|UserEmailRelationship[] get(array|string $columns = ['*'])
     * @method UserEmailRelationship getModel()
     * @method UserEmailRelationship[] getModels(array|string $columns = ['*'])
     * @method _UserEmailRelationshipCollection|UserEmailRelationship[] hydrate(array $items)
     * @method UserEmailRelationship make(array $attributes = [])
     * @method UserEmailRelationship newModelInstance(array $attributes = [])
     * @method UserEmailRelationship updateOrCreate(array $attributes, array $values = [])
     */
    class _UserEmailRelationshipQueryBuilder extends _BaseBuilder
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
     * @method _UserQueryBuilder whereWeight($value)
     * @method _UserQueryBuilder whereRestricted($value)
     * @method _UserQueryBuilder whereMeta($value)
     * @method _UserQueryBuilder whereDeletedAt($value)
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
     * @method _UserQueryBuilder withTrashed()
     * @method _UserQueryBuilder onlyTrashed()
     * @method _UserQueryBuilder withoutTrashed()
     */
    class _UserQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method VaporFile shift()
     * @method VaporFile pop()
     * @method VaporFile get($key, $default = null)
     * @method VaporFile pull($key, $default = null)
     * @method VaporFile first(callable $callback = null, $default = null)
     * @method VaporFile firstWhere(string $key, $operator = null, $value = null)
     * @method VaporFile[] all()
     * @method VaporFile last(callable $callback = null, $default = null)
     * @property-read _VaporFileCollectionProxy $keyBy
     * @property-read _VaporFileCollectionProxy $max
     * @property-read _VaporFileCollectionProxy $partition
     * @property-read _VaporFileCollectionProxy $average
     * @property-read _VaporFileCollectionProxy $flatMap
     * @property-read _VaporFileCollectionProxy $each
     * @property-read _VaporFileCollectionProxy $some
     * @property-read _VaporFileCollectionProxy $map
     * @property-read _VaporFileCollectionProxy $sortByDesc
     * @property-read _VaporFileCollectionProxy $filter
     * @property-read _VaporFileCollectionProxy $avg
     * @property-read _VaporFileCollectionProxy $unique
     * @property-read _VaporFileCollectionProxy $first
     * @property-read _VaporFileCollectionProxy $min
     * @property-read _VaporFileCollectionProxy $groupBy
     * @property-read _VaporFileCollectionProxy $reject
     * @property-read _VaporFileCollectionProxy $sortBy
     * @property-read _VaporFileCollectionProxy $contains
     * @property-read _VaporFileCollectionProxy $sum
     * @property-read _VaporFileCollectionProxy $until
     * @property-read _VaporFileCollectionProxy $every
     */
    class _VaporFileCollection extends _BaseCollection
    {
        /**
         * @param  int  $size
         * @return VaporFile[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _VaporFileCollection|mixed $id
     * @property _VaporFileCollection|mixed $avatar
     * @property _VaporFileCollection|mixed $original_name
     * @property _VaporFileCollection|mixed $created_at
     * @property _VaporFileCollection|mixed $updated_at
     * @see \Laravel\Nova\Actions\Actionable::actions
     * @method _VaporFileCollection actions()
     * @see \Laravel\Nova\Actions\Actionable::actions
     * @method _VaporFileCollection actions()
     * @see \Laravel\Nova\Actions\Actionable::actions
     * @method _VaporFileCollection actions()
     * @see \Laravel\Nova\Actions\Actionable::actions
     * @method _VaporFileCollection actions()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _VaporFileCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _VaporFileCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _VaporFileCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _VaporFileCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _VaporFileCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _VaporFileCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _VaporFileCollection delete()
     */
    class _VaporFileCollectionProxy
    {
    }

    /**
     * @method _VaporFileQueryBuilder whereId($value)
     * @method _VaporFileQueryBuilder whereAvatar($value)
     * @method _VaporFileQueryBuilder whereOriginalName($value)
     * @method _VaporFileQueryBuilder whereCreatedAt($value)
     * @method _VaporFileQueryBuilder whereUpdatedAt($value)
     * @method VaporFile create(array $attributes = [])
     * @method _VaporFileCollection|VaporFile[] cursor()
     * @method VaporFile|null find($id, array $columns = ['*'])
     * @method _VaporFileCollection|VaporFile[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method VaporFile findOrFail($id, array $columns = ['*'])
     * @method _VaporFileCollection|VaporFile[] findOrNew($id, array $columns = ['*'])
     * @method VaporFile first(array|string $columns = ['*'])
     * @method VaporFile firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method VaporFile firstOrCreate(array $attributes, array $values = [])
     * @method VaporFile firstOrFail(array $columns = ['*'])
     * @method VaporFile firstOrNew(array $attributes = [], array $values = [])
     * @method VaporFile firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method VaporFile forceCreate(array $attributes)
     * @method _VaporFileCollection|VaporFile[] fromQuery(string $query, array $bindings = [])
     * @method _VaporFileCollection|VaporFile[] get(array|string $columns = ['*'])
     * @method VaporFile getModel()
     * @method VaporFile[] getModels(array|string $columns = ['*'])
     * @method _VaporFileCollection|VaporFile[] hydrate(array $items)
     * @method VaporFile make(array $attributes = [])
     * @method VaporFile newModelInstance(array $attributes = [])
     * @method VaporFile updateOrCreate(array $attributes, array $values = [])
     */
    class _VaporFileQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method Vehicle shift()
     * @method Vehicle pop()
     * @method Vehicle get($key, $default = null)
     * @method Vehicle pull($key, $default = null)
     * @method Vehicle first(callable $callback = null, $default = null)
     * @method Vehicle firstWhere(string $key, $operator = null, $value = null)
     * @method Vehicle[] all()
     * @method Vehicle last(callable $callback = null, $default = null)
     * @property-read _VehicleCollectionProxy $keyBy
     * @property-read _VehicleCollectionProxy $max
     * @property-read _VehicleCollectionProxy $partition
     * @property-read _VehicleCollectionProxy $average
     * @property-read _VehicleCollectionProxy $flatMap
     * @property-read _VehicleCollectionProxy $each
     * @property-read _VehicleCollectionProxy $some
     * @property-read _VehicleCollectionProxy $map
     * @property-read _VehicleCollectionProxy $sortByDesc
     * @property-read _VehicleCollectionProxy $filter
     * @property-read _VehicleCollectionProxy $avg
     * @property-read _VehicleCollectionProxy $unique
     * @property-read _VehicleCollectionProxy $first
     * @property-read _VehicleCollectionProxy $min
     * @property-read _VehicleCollectionProxy $groupBy
     * @property-read _VehicleCollectionProxy $reject
     * @property-read _VehicleCollectionProxy $sortBy
     * @property-read _VehicleCollectionProxy $contains
     * @property-read _VehicleCollectionProxy $sum
     * @property-read _VehicleCollectionProxy $until
     * @property-read _VehicleCollectionProxy $every
     */
    class _VehicleCollection extends _BaseCollection
    {
        /**
         * @param  int  $size
         * @return Vehicle[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _VehicleCollection|mixed $id
     * @property _VehicleCollection|mixed $model
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _VehicleCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _VehicleCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _VehicleCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _VehicleCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _VehicleCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _VehicleCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _VehicleCollection delete()
     */
    class _VehicleCollectionProxy
    {
    }

    /**
     * @method _VehicleQueryBuilder whereId($value)
     * @method _VehicleQueryBuilder whereModel($value)
     * @method Vehicle create(array $attributes = [])
     * @method _VehicleCollection|Vehicle[] cursor()
     * @method Vehicle|null find($id, array $columns = ['*'])
     * @method _VehicleCollection|Vehicle[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Vehicle findOrFail($id, array $columns = ['*'])
     * @method _VehicleCollection|Vehicle[] findOrNew($id, array $columns = ['*'])
     * @method Vehicle first(array|string $columns = ['*'])
     * @method Vehicle firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Vehicle firstOrCreate(array $attributes, array $values = [])
     * @method Vehicle firstOrFail(array $columns = ['*'])
     * @method Vehicle firstOrNew(array $attributes = [], array $values = [])
     * @method Vehicle firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Vehicle forceCreate(array $attributes)
     * @method _VehicleCollection|Vehicle[] fromQuery(string $query, array $bindings = [])
     * @method _VehicleCollection|Vehicle[] get(array|string $columns = ['*'])
     * @method Vehicle getModel()
     * @method Vehicle[] getModels(array|string $columns = ['*'])
     * @method _VehicleCollection|Vehicle[] hydrate(array $items)
     * @method Vehicle make(array $attributes = [])
     * @method Vehicle newModelInstance(array $attributes = [])
     * @method Vehicle updateOrCreate(array $attributes, array $values = [])
     */
    class _VehicleQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method Wheel shift()
     * @method Wheel pop()
     * @method Wheel get($key, $default = null)
     * @method Wheel pull($key, $default = null)
     * @method Wheel first(callable $callback = null, $default = null)
     * @method Wheel firstWhere(string $key, $operator = null, $value = null)
     * @method Wheel[] all()
     * @method Wheel last(callable $callback = null, $default = null)
     * @property-read _WheelCollectionProxy $keyBy
     * @property-read _WheelCollectionProxy $max
     * @property-read _WheelCollectionProxy $partition
     * @property-read _WheelCollectionProxy $average
     * @property-read _WheelCollectionProxy $flatMap
     * @property-read _WheelCollectionProxy $each
     * @property-read _WheelCollectionProxy $some
     * @property-read _WheelCollectionProxy $map
     * @property-read _WheelCollectionProxy $sortByDesc
     * @property-read _WheelCollectionProxy $filter
     * @property-read _WheelCollectionProxy $avg
     * @property-read _WheelCollectionProxy $unique
     * @property-read _WheelCollectionProxy $first
     * @property-read _WheelCollectionProxy $min
     * @property-read _WheelCollectionProxy $groupBy
     * @property-read _WheelCollectionProxy $reject
     * @property-read _WheelCollectionProxy $sortBy
     * @property-read _WheelCollectionProxy $contains
     * @property-read _WheelCollectionProxy $sum
     * @property-read _WheelCollectionProxy $until
     * @property-read _WheelCollectionProxy $every
     */
    class _WheelCollection extends _BaseCollection
    {
        /**
         * @param  int  $size
         * @return Wheel[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _WheelCollection|mixed $id
     * @property _WheelCollection|mixed $vehicle_id
     * @property _WheelCollection|mixed $vehicle
     * @property _WheelCollection|mixed $vehicle
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _WheelCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _WheelCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _WheelCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _WheelCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _WheelCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _WheelCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _WheelCollection delete()
     */
    class _WheelCollectionProxy
    {
    }

    /**
     * @method _WheelQueryBuilder whereId($value)
     * @method _WheelQueryBuilder whereVehicleId($value)
     * @method Wheel create(array $attributes = [])
     * @method _WheelCollection|Wheel[] cursor()
     * @method Wheel|null find($id, array $columns = ['*'])
     * @method _WheelCollection|Wheel[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Wheel findOrFail($id, array $columns = ['*'])
     * @method _WheelCollection|Wheel[] findOrNew($id, array $columns = ['*'])
     * @method Wheel first(array|string $columns = ['*'])
     * @method Wheel firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Wheel firstOrCreate(array $attributes, array $values = [])
     * @method Wheel firstOrFail(array $columns = ['*'])
     * @method Wheel firstOrNew(array $attributes = [], array $values = [])
     * @method Wheel firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Wheel forceCreate(array $attributes)
     * @method _WheelCollection|Wheel[] fromQuery(string $query, array $bindings = [])
     * @method _WheelCollection|Wheel[] get(array|string $columns = ['*'])
     * @method Wheel getModel()
     * @method Wheel[] getModels(array|string $columns = ['*'])
     * @method _WheelCollection|Wheel[] hydrate(array $items)
     * @method Wheel make(array $attributes = [])
     * @method Wheel newModelInstance(array $attributes = [])
     * @method Wheel updateOrCreate(array $attributes, array $values = [])
     */
    class _WheelQueryBuilder extends _BaseBuilder
    {
    }
}
namespace LaravelIdea\Helper\Laravel\Nova\Trix {

    use Illuminate\Contracts\Support\Arrayable;
    use Laravel\Nova\Fields\Trix;
    use Laravel\Nova\Trix\Attachment;
    use Laravel\Nova\Trix\PendingAttachment;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method Attachment shift()
     * @method Attachment pop()
     * @method Attachment get($key, $default = null)
     * @method Attachment pull($key, $default = null)
     * @method Attachment first(callable $callback = null, $default = null)
     * @method Attachment firstWhere(string $key, $operator = null, $value = null)
     * @method Attachment[] all()
     * @method Attachment last(callable $callback = null, $default = null)
     * @property-read _AttachmentCollectionProxy $keyBy
     * @property-read _AttachmentCollectionProxy $max
     * @property-read _AttachmentCollectionProxy $partition
     * @property-read _AttachmentCollectionProxy $average
     * @property-read _AttachmentCollectionProxy $flatMap
     * @property-read _AttachmentCollectionProxy $each
     * @property-read _AttachmentCollectionProxy $some
     * @property-read _AttachmentCollectionProxy $map
     * @property-read _AttachmentCollectionProxy $sortByDesc
     * @property-read _AttachmentCollectionProxy $filter
     * @property-read _AttachmentCollectionProxy $avg
     * @property-read _AttachmentCollectionProxy $unique
     * @property-read _AttachmentCollectionProxy $first
     * @property-read _AttachmentCollectionProxy $min
     * @property-read _AttachmentCollectionProxy $groupBy
     * @property-read _AttachmentCollectionProxy $reject
     * @property-read _AttachmentCollectionProxy $sortBy
     * @property-read _AttachmentCollectionProxy $contains
     * @property-read _AttachmentCollectionProxy $sum
     * @property-read _AttachmentCollectionProxy $until
     * @property-read _AttachmentCollectionProxy $every
     */
    class _AttachmentCollection extends _BaseCollection
    {
        /**
         * @param  int  $size
         * @return Attachment[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _AttachmentCollection|mixed $id
     * @property _AttachmentCollection|mixed $attachable_type
     * @property _AttachmentCollection|mixed $attachable_id
     * @property _AttachmentCollection|mixed $attachment
     * @property _AttachmentCollection|mixed $disk
     * @property _AttachmentCollection|mixed $url
     * @property _AttachmentCollection|mixed $created_at
     * @property _AttachmentCollection|mixed $updated_at
     * @see \Laravel\Nova\Trix\Attachment::purge
     * @method _AttachmentCollection purge()
     * @see \Laravel\Nova\Trix\Attachment::purge
     * @method _AttachmentCollection purge()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _AttachmentCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _AttachmentCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _AttachmentCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _AttachmentCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _AttachmentCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _AttachmentCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _AttachmentCollection delete()
     */
    class _AttachmentCollectionProxy
    {
    }

    /**
     * @method _AttachmentQueryBuilder whereId($value)
     * @method _AttachmentQueryBuilder whereAttachableType($value)
     * @method _AttachmentQueryBuilder whereAttachableId($value)
     * @method _AttachmentQueryBuilder whereAttachment($value)
     * @method _AttachmentQueryBuilder whereDisk($value)
     * @method _AttachmentQueryBuilder whereUrl($value)
     * @method _AttachmentQueryBuilder whereCreatedAt($value)
     * @method _AttachmentQueryBuilder whereUpdatedAt($value)
     * @method Attachment create(array $attributes = [])
     * @method _AttachmentCollection|Attachment[] cursor()
     * @method Attachment|null find($id, array $columns = ['*'])
     * @method _AttachmentCollection|Attachment[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Attachment findOrFail($id, array $columns = ['*'])
     * @method _AttachmentCollection|Attachment[] findOrNew($id, array $columns = ['*'])
     * @method Attachment first(array|string $columns = ['*'])
     * @method Attachment firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Attachment firstOrCreate(array $attributes, array $values = [])
     * @method Attachment firstOrFail(array $columns = ['*'])
     * @method Attachment firstOrNew(array $attributes = [], array $values = [])
     * @method Attachment firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Attachment forceCreate(array $attributes)
     * @method _AttachmentCollection|Attachment[] fromQuery(string $query, array $bindings = [])
     * @method _AttachmentCollection|Attachment[] get(array|string $columns = ['*'])
     * @method Attachment getModel()
     * @method Attachment[] getModels(array|string $columns = ['*'])
     * @method _AttachmentCollection|Attachment[] hydrate(array $items)
     * @method Attachment make(array $attributes = [])
     * @method Attachment newModelInstance(array $attributes = [])
     * @method Attachment updateOrCreate(array $attributes, array $values = [])
     */
    class _AttachmentQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method PendingAttachment shift()
     * @method PendingAttachment pop()
     * @method PendingAttachment get($key, $default = null)
     * @method PendingAttachment pull($key, $default = null)
     * @method PendingAttachment first(callable $callback = null, $default = null)
     * @method PendingAttachment firstWhere(string $key, $operator = null, $value = null)
     * @method PendingAttachment[] all()
     * @method PendingAttachment last(callable $callback = null, $default = null)
     * @property-read _PendingAttachmentCollectionProxy $keyBy
     * @property-read _PendingAttachmentCollectionProxy $max
     * @property-read _PendingAttachmentCollectionProxy $partition
     * @property-read _PendingAttachmentCollectionProxy $average
     * @property-read _PendingAttachmentCollectionProxy $flatMap
     * @property-read _PendingAttachmentCollectionProxy $each
     * @property-read _PendingAttachmentCollectionProxy $some
     * @property-read _PendingAttachmentCollectionProxy $map
     * @property-read _PendingAttachmentCollectionProxy $sortByDesc
     * @property-read _PendingAttachmentCollectionProxy $filter
     * @property-read _PendingAttachmentCollectionProxy $avg
     * @property-read _PendingAttachmentCollectionProxy $unique
     * @property-read _PendingAttachmentCollectionProxy $first
     * @property-read _PendingAttachmentCollectionProxy $min
     * @property-read _PendingAttachmentCollectionProxy $groupBy
     * @property-read _PendingAttachmentCollectionProxy $reject
     * @property-read _PendingAttachmentCollectionProxy $sortBy
     * @property-read _PendingAttachmentCollectionProxy $contains
     * @property-read _PendingAttachmentCollectionProxy $sum
     * @property-read _PendingAttachmentCollectionProxy $until
     * @property-read _PendingAttachmentCollectionProxy $every
     */
    class _PendingAttachmentCollection extends _BaseCollection
    {
        /**
         * @param  int  $size
         * @return PendingAttachment[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _PendingAttachmentCollection|mixed $id
     * @property _PendingAttachmentCollection|mixed $draft_id
     * @property _PendingAttachmentCollection|mixed $attachment
     * @property _PendingAttachmentCollection|mixed $disk
     * @property _PendingAttachmentCollection|mixed $created_at
     * @property _PendingAttachmentCollection|mixed $updated_at
     * @see \Laravel\Nova\Trix\PendingAttachment::purge
     * @method _PendingAttachmentCollection purge()
     * @see \Laravel\Nova\Trix\PendingAttachment::persist
     * @method _PendingAttachmentCollection persist(Trix $field, $model)
     * @see \Laravel\Nova\Trix\PendingAttachment::purge
     * @method _PendingAttachmentCollection purge()
     * @see \Laravel\Nova\Trix\PendingAttachment::persist
     * @method _PendingAttachmentCollection persist(Trix $field, $model)
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _PendingAttachmentCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _PendingAttachmentCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _PendingAttachmentCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _PendingAttachmentCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _PendingAttachmentCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _PendingAttachmentCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _PendingAttachmentCollection delete()
     */
    class _PendingAttachmentCollectionProxy
    {
    }

    /**
     * @method _PendingAttachmentQueryBuilder whereId($value)
     * @method _PendingAttachmentQueryBuilder whereDraftId($value)
     * @method _PendingAttachmentQueryBuilder whereAttachment($value)
     * @method _PendingAttachmentQueryBuilder whereDisk($value)
     * @method _PendingAttachmentQueryBuilder whereCreatedAt($value)
     * @method _PendingAttachmentQueryBuilder whereUpdatedAt($value)
     * @method PendingAttachment create(array $attributes = [])
     * @method _PendingAttachmentCollection|PendingAttachment[] cursor()
     * @method PendingAttachment|null find($id, array $columns = ['*'])
     * @method _PendingAttachmentCollection|PendingAttachment[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method PendingAttachment findOrFail($id, array $columns = ['*'])
     * @method _PendingAttachmentCollection|PendingAttachment[] findOrNew($id, array $columns = ['*'])
     * @method PendingAttachment first(array|string $columns = ['*'])
     * @method PendingAttachment firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method PendingAttachment firstOrCreate(array $attributes, array $values = [])
     * @method PendingAttachment firstOrFail(array $columns = ['*'])
     * @method PendingAttachment firstOrNew(array $attributes = [], array $values = [])
     * @method PendingAttachment firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PendingAttachment forceCreate(array $attributes)
     * @method _PendingAttachmentCollection|PendingAttachment[] fromQuery(string $query, array $bindings = [])
     * @method _PendingAttachmentCollection|PendingAttachment[] get(array|string $columns = ['*'])
     * @method PendingAttachment getModel()
     * @method PendingAttachment[] getModels(array|string $columns = ['*'])
     * @method _PendingAttachmentCollection|PendingAttachment[] hydrate(array $items)
     * @method PendingAttachment make(array $attributes = [])
     * @method PendingAttachment newModelInstance(array $attributes = [])
     * @method PendingAttachment updateOrCreate(array $attributes, array $values = [])
     */
    class _PendingAttachmentQueryBuilder extends _BaseBuilder
    {
    }
}
namespace Laravel\Nova\Actions {

    use App\User;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\_UserQueryBuilder;
    use LaravelIdea\Helper\Laravel\Nova\Actions\_ActionEventCollection;
    use LaravelIdea\Helper\Laravel\Nova\Actions\_ActionEventQueryBuilder;

    /**
     * @property int $id
     * @property string $batch_id
     * @property int $user_id
     * @property string $name
     * @property string $actionable_type
     * @property int $actionable_id
     * @property string $target_type
     * @property int $target_id
     * @property string $model_type
     * @property int|null $model_id
     * @property string $fields
     * @property string $status
     * @property string $exception
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property array|null $original
     * @property array|null $changes
     * @property Model $target
     * @method MorphTo target()
     * @property Model $target
     * @method MorphTo target()
     * @property User $user
     * @method BelongsTo|_UserQueryBuilder user()
     * @property User $user
     * @method BelongsTo|_UserQueryBuilder user()
     * @method _ActionEventQueryBuilder newModelQuery()
     * @method _ActionEventQueryBuilder newQuery()
     * @method static _ActionEventQueryBuilder query()
     * @method static _ActionEventCollection|ActionEvent[] all()
     * @mixin _ActionEventQueryBuilder
     */
    class ActionEvent extends Model
    {
    }
}
namespace Laravel\Nova\Tests\Controller {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Support\Carbon;
    use Laravel\Nova\Tests\Fixtures\Address;
    use Laravel\Nova\Tests\Fixtures\Post;
    use Laravel\Nova\Tests\Fixtures\Profile;
    use Laravel\Nova\Tests\Fixtures\Role;
    use Laravel\Nova\Tests\Fixtures\User;
    use LaravelIdea\Helper\Illuminate\Notifications\_DatabaseNotificationCollection;
    use LaravelIdea\Helper\Illuminate\Notifications\_DatabaseNotificationQueryBuilder;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Controller\_AuthorCollection;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Controller\_AuthorQueryBuilder;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_AddressQueryBuilder;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_PostCollection;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_PostQueryBuilder;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_ProfileQueryBuilder;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_RoleCollection;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_RoleQueryBuilder;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_UserCollection;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_UserQueryBuilder;

    /**
     * @property int $id
     * @property string $name
     * @property string $email
     * @property Carbon|null $email_verified_at
     * @property string $password
     * @property string|null $remember_token
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $weight
     * @property string $restricted
     * @property array|null $meta
     * @property Carbon|null $deleted_at
     * @property-read $post
     * @property-read $post
     * @property Address $address
     * @method HasOne|_AddressQueryBuilder address()
     * @property Address $address
     * @method HasOne|_AddressQueryBuilder address()
     * @property Post $getPostAttribute
     * @method BelongsTo|_PostQueryBuilder getPostAttribute()
     * @property Post $getPostAttribute
     * @method BelongsTo|_PostQueryBuilder getPostAttribute()
     * @property _DatabaseNotificationCollection|DatabaseNotification[] $notifications
     * @method MorphToMany|_DatabaseNotificationQueryBuilder notifications()
     * @property _DatabaseNotificationCollection|DatabaseNotification[] $notifications
     * @method MorphToMany|_DatabaseNotificationQueryBuilder notifications()
     * @property _PostCollection|Post[] $posts
     * @method HasMany|_PostQueryBuilder posts()
     * @property _PostCollection|Post[] $posts
     * @method HasMany|_PostQueryBuilder posts()
     * @property Profile $profile
     * @method HasOne|_ProfileQueryBuilder profile()
     * @property Profile $profile
     * @method HasOne|_ProfileQueryBuilder profile()
     * @property _UserCollection|User[] $relatedUsers
     * @method BelongsToMany|_UserQueryBuilder relatedUsers()
     * @property _UserCollection|User[] $relatedUsers
     * @method BelongsToMany|_UserQueryBuilder relatedUsers()
     * @property _RoleCollection|Role[] $roles
     * @method BelongsToMany|_RoleQueryBuilder roles()
     * @property _RoleCollection|Role[] $roles
     * @method BelongsToMany|_RoleQueryBuilder roles()
     * @method _AuthorQueryBuilder newModelQuery()
     * @method _AuthorQueryBuilder newQuery()
     * @method static _AuthorQueryBuilder query()
     * @method static _AuthorCollection|Author[] all()
     * @method _AuthorQueryBuilder withTrashed()
     * @method _AuthorQueryBuilder onlyTrashed()
     * @method _AuthorQueryBuilder withoutTrashed()
     * @mixin _AuthorQueryBuilder
     */
    class Author extends Model
    {
    }
}
namespace Laravel\Nova\Tests\Feature {

    use App\User;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use LaravelIdea\Helper\App\_UserQueryBuilder;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Feature\_CustomActionEventCollection;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Feature\_CustomActionEventQueryBuilder;

    /**
     * @property Model $target
     * @method MorphTo target()
     * @property Model $target
     * @method MorphTo target()
     * @property User $user
     * @method BelongsTo|_UserQueryBuilder user()
     * @property User $user
     * @method BelongsTo|_UserQueryBuilder user()
     * @method _CustomActionEventQueryBuilder newModelQuery()
     * @method _CustomActionEventQueryBuilder newQuery()
     * @method static _CustomActionEventQueryBuilder query()
     * @method static _CustomActionEventCollection|CustomActionEvent[] all()
     * @mixin _CustomActionEventQueryBuilder
     */
    class CustomActionEvent extends Model
    {
    }
}
namespace Laravel\Nova\Tests\Fixtures {

    use App\User as User1;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\_UserQueryBuilder as _UserQueryBuilder1;
    use LaravelIdea\Helper\Illuminate\Notifications\_DatabaseNotificationCollection;
    use LaravelIdea\Helper\Illuminate\Notifications\_DatabaseNotificationQueryBuilder;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_AddressCollection;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_AddressQueryBuilder;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_BooleanCollection;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_BooleanQueryBuilder;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_CommentCollection;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_CommentQueryBuilder;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_CustomConnectionActionEventCollection;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_CustomConnectionActionEventQueryBuilder;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_CustomKeyCollection;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_CustomKeyQueryBuilder;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_DiscussionCollection;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_DiscussionQueryBuilder;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_FileCollection;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_FileQueryBuilder;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_PostCollection;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_PostQueryBuilder;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_PostWithCustomCreatedAtCollection;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_PostWithCustomCreatedAtQueryBuilder;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_ProfileCollection;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_ProfileQueryBuilder;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_RecipientCollection;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_RecipientQueryBuilder;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_RoleAssignmentCollection;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_RoleAssignmentQueryBuilder;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_RoleCollection;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_RoleQueryBuilder;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_SoftDeletingFileCollection;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_SoftDeletingFileQueryBuilder;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_TagCollection;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_TagQueryBuilder;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_UserCollection;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_UserEmailRelationshipCollection;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_UserEmailRelationshipQueryBuilder;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_UserQueryBuilder;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_VaporFileCollection;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_VaporFileQueryBuilder;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_VehicleCollection;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_VehicleQueryBuilder;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_WheelCollection;
    use LaravelIdea\Helper\Laravel\Nova\Tests\Fixtures\_WheelQueryBuilder;

    /**
     * @property int $id
     * @property int $user_id
     * @property string $name
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property User $user
     * @method BelongsTo|_UserQueryBuilder user()
     * @property User $user
     * @method BelongsTo|_UserQueryBuilder user()
     * @method _AddressQueryBuilder newModelQuery()
     * @method _AddressQueryBuilder newQuery()
     * @method static _AddressQueryBuilder query()
     * @method static _AddressCollection|Address[] all()
     * @mixin _AddressQueryBuilder
     */
    class Address extends Model
    {
    }

    /**
     * @property int $id
     * @property string $active
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method _BooleanQueryBuilder newModelQuery()
     * @method _BooleanQueryBuilder newQuery()
     * @method static _BooleanQueryBuilder query()
     * @method static _BooleanCollection|Boolean[] all()
     * @mixin _BooleanQueryBuilder
     */
    class Boolean extends Model
    {
    }

    /**
     * @property int $id
     * @property int $commentable_id
     * @property string $commentable_type
     * @property int $author_id
     * @property string $body
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property User $author
     * @method BelongsTo|_UserQueryBuilder author()
     * @property User $author
     * @method BelongsTo|_UserQueryBuilder author()
     * @property Model $commentable
     * @method MorphTo commentable()
     * @property Model $commentable
     * @method MorphTo commentable()
     * @method _CommentQueryBuilder newModelQuery()
     * @method _CommentQueryBuilder newQuery()
     * @method static _CommentQueryBuilder query()
     * @method static _CommentCollection|Comment[] all()
     * @mixin _CommentQueryBuilder
     */
    class Comment extends Model
    {
    }

    /**
     * @property Model $target
     * @method MorphTo target()
     * @property Model $target
     * @method MorphTo target()
     * @property User1 $user
     * @method BelongsTo|_UserQueryBuilder1 user()
     * @property User1 $user
     * @method BelongsTo|_UserQueryBuilder1 user()
     * @method _CustomConnectionActionEventQueryBuilder newModelQuery()
     * @method _CustomConnectionActionEventQueryBuilder newQuery()
     * @method static _CustomConnectionActionEventQueryBuilder query()
     * @method static _CustomConnectionActionEventCollection|CustomConnectionActionEvent[] all()
     * @mixin _CustomConnectionActionEventQueryBuilder
     */
    class CustomConnectionActionEvent extends Model
    {
    }

    /**
     * @property int $pk
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method _CustomKeyQueryBuilder newModelQuery()
     * @method _CustomKeyQueryBuilder newQuery()
     * @method static _CustomKeyQueryBuilder query()
     * @method static _CustomKeyCollection|CustomKey[] all()
     * @mixin _CustomKeyQueryBuilder
     */
    class CustomKey extends Model
    {
    }

    /**
     * @property int $id
     * @property int|null $user_id
     * @property string $title
     * @property string|null $body
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property User $user
     * @method BelongsTo|_UserQueryBuilder user()
     * @property User $user
     * @method BelongsTo|_UserQueryBuilder user()
     * @method _DiscussionQueryBuilder newModelQuery()
     * @method _DiscussionQueryBuilder newQuery()
     * @method static _DiscussionQueryBuilder query()
     * @method static _DiscussionCollection|Discussion[] all()
     * @mixin _DiscussionQueryBuilder
     */
    class Discussion extends Model
    {
    }

    /**
     * @property int $id
     * @property string|null $name
     * @property string|null $avatar
     * @property string|null $original_name
     * @property string|null $size
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method _FileQueryBuilder newModelQuery()
     * @method _FileQueryBuilder newQuery()
     * @method static _FileQueryBuilder query()
     * @method static _FileCollection|File[] all()
     * @mixin _FileQueryBuilder
     */
    class File extends Model
    {
    }

    /**
     * @property int $id
     * @property int|null $user_id
     * @property string $title
     * @property string|null $slug
     * @property string|null $description
     * @property int|null $word_count
     * @property Carbon|null $published_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _UserCollection|User[] $authors
     * @method BelongsToMany|_UserQueryBuilder authors()
     * @property _UserCollection|User[] $authors
     * @method BelongsToMany|_UserQueryBuilder authors()
     * @property _CommentCollection|Comment[] $comments
     * @method MorphToMany|_CommentQueryBuilder comments()
     * @property _CommentCollection|Comment[] $comments
     * @method MorphToMany|_CommentQueryBuilder comments()
     * @property _TagCollection|Tag[] $tags
     * @method MorphToMany|_TagQueryBuilder tags()
     * @property _TagCollection|Tag[] $tags
     * @method MorphToMany|_TagQueryBuilder tags()
     * @property User $user
     * @method BelongsTo|_UserQueryBuilder user()
     * @property User $user
     * @method BelongsTo|_UserQueryBuilder user()
     * @method _PostQueryBuilder newModelQuery()
     * @method _PostQueryBuilder newQuery()
     * @method static _PostQueryBuilder query()
     * @method static _PostCollection|Post[] all()
     * @mixin _PostQueryBuilder
     */
    class Post extends Model
    {
    }

    /**
     * @property int $id
     * @property int|null $user_id
     * @property string $title
     * @property string|null $slug
     * @property string|null $description
     * @property int|null $word_count
     * @property Carbon|null $published_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _UserCollection|User[] $authors
     * @method BelongsToMany|_UserQueryBuilder authors()
     * @property _UserCollection|User[] $authors
     * @method BelongsToMany|_UserQueryBuilder authors()
     * @property _CommentCollection|Comment[] $comments
     * @method MorphToMany|_CommentQueryBuilder comments()
     * @property _CommentCollection|Comment[] $comments
     * @method MorphToMany|_CommentQueryBuilder comments()
     * @property _TagCollection|Tag[] $tags
     * @method MorphToMany|_TagQueryBuilder tags()
     * @property _TagCollection|Tag[] $tags
     * @method MorphToMany|_TagQueryBuilder tags()
     * @property User $user
     * @method BelongsTo|_UserQueryBuilder user()
     * @property User $user
     * @method BelongsTo|_UserQueryBuilder user()
     * @method _PostWithCustomCreatedAtQueryBuilder newModelQuery()
     * @method _PostWithCustomCreatedAtQueryBuilder newQuery()
     * @method static _PostWithCustomCreatedAtQueryBuilder query()
     * @method static _PostWithCustomCreatedAtCollection|PostWithCustomCreatedAt[] all()
     * @mixin _PostWithCustomCreatedAtQueryBuilder
     */
    class PostWithCustomCreatedAt extends Model
    {
    }

    /**
     * @property int $id
     * @property int|null $user_id
     * @property string $phone
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property User $user
     * @method BelongsTo|_UserQueryBuilder user()
     * @property User $user
     * @method BelongsTo|_UserQueryBuilder user()
     * @method _ProfileQueryBuilder newModelQuery()
     * @method _ProfileQueryBuilder newQuery()
     * @method static _ProfileQueryBuilder query()
     * @method static _ProfileCollection|Profile[] all()
     * @mixin _ProfileQueryBuilder
     */
    class Profile extends Model
    {
    }

    /**
     * @property int $id
     * @property string $email
     * @property string $name
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property User $user
     * @method BelongsTo|_UserQueryBuilder user()
     * @property User $user
     * @method BelongsTo|_UserQueryBuilder user()
     * @method _RecipientQueryBuilder newModelQuery()
     * @method _RecipientQueryBuilder newQuery()
     * @method static _RecipientQueryBuilder query()
     * @method static _RecipientCollection|Recipient[] all()
     * @mixin _RecipientQueryBuilder
     */
    class Recipient extends Model
    {
    }

    /**
     * @property int $id
     * @property int $created_by_id
     * @property string $name
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property User $createdBy
     * @method BelongsTo|_UserQueryBuilder createdBy()
     * @property User $createdBy
     * @method BelongsTo|_UserQueryBuilder createdBy()
     * @property _UserCollection|User[] $users
     * @method BelongsToMany|_UserQueryBuilder users()
     * @property _UserCollection|User[] $users
     * @method BelongsToMany|_UserQueryBuilder users()
     * @method _RoleQueryBuilder newModelQuery()
     * @method _RoleQueryBuilder newQuery()
     * @method static _RoleQueryBuilder query()
     * @method static _RoleCollection|Role[] all()
     * @mixin _RoleQueryBuilder
     */
    class Role extends Model
    {
    }

    /**
     * @property int $id
     * @property int $user_id
     * @property int $role_id
     * @property string|null $admin
     * @property string|null $pivot-update
     * @property string|null $photo
     * @property string $restricted
     * @method _RoleAssignmentQueryBuilder newModelQuery()
     * @method _RoleAssignmentQueryBuilder newQuery()
     * @method static _RoleAssignmentQueryBuilder query()
     * @method static _RoleAssignmentCollection|RoleAssignment[] all()
     * @mixin _RoleAssignmentQueryBuilder
     */
    class RoleAssignment extends Model
    {
    }

    /**
     * @property int $id
     * @property string|null $name
     * @property string|null $avatar
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Carbon|null $deleted_at
     * @method _SoftDeletingFileQueryBuilder newModelQuery()
     * @method _SoftDeletingFileQueryBuilder newQuery()
     * @method static _SoftDeletingFileQueryBuilder query()
     * @method static _SoftDeletingFileCollection|SoftDeletingFile[] all()
     * @method _SoftDeletingFileQueryBuilder withTrashed()
     * @method _SoftDeletingFileQueryBuilder onlyTrashed()
     * @method _SoftDeletingFileQueryBuilder withoutTrashed()
     * @mixin _SoftDeletingFileQueryBuilder
     */
    class SoftDeletingFile extends Model
    {
    }

    /**
     * @property int $id
     * @property string $name
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _PostCollection|Post[] $posts
     * @method MorphToMany|_PostQueryBuilder posts()
     * @property _PostCollection|Post[] $posts
     * @method MorphToMany|_PostQueryBuilder posts()
     * @method _TagQueryBuilder newModelQuery()
     * @method _TagQueryBuilder newQuery()
     * @method static _TagQueryBuilder query()
     * @method static _TagCollection|Tag[] all()
     * @mixin _TagQueryBuilder
     */
    class Tag extends Model
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
     * @property string|null $weight
     * @property string $restricted
     * @property array|null $meta
     * @property Carbon|null $deleted_at
     * @property Address $address
     * @method HasOne|_AddressQueryBuilder address()
     * @property Address $address
     * @method HasOne|_AddressQueryBuilder address()
     * @property _DatabaseNotificationCollection|DatabaseNotification[] $notifications
     * @method MorphToMany|_DatabaseNotificationQueryBuilder notifications()
     * @property _DatabaseNotificationCollection|DatabaseNotification[] $notifications
     * @method MorphToMany|_DatabaseNotificationQueryBuilder notifications()
     * @property _PostCollection|Post[] $posts
     * @method HasMany|_PostQueryBuilder posts()
     * @property _PostCollection|Post[] $posts
     * @method HasMany|_PostQueryBuilder posts()
     * @property Profile $profile
     * @method HasOne|_ProfileQueryBuilder profile()
     * @property Profile $profile
     * @method HasOne|_ProfileQueryBuilder profile()
     * @property _UserCollection|User[] $relatedUsers
     * @method BelongsToMany|_UserQueryBuilder relatedUsers()
     * @property _UserCollection|User[] $relatedUsers
     * @method BelongsToMany|_UserQueryBuilder relatedUsers()
     * @property _RoleCollection|Role[] $roles
     * @method BelongsToMany|_RoleQueryBuilder roles()
     * @property _RoleCollection|Role[] $roles
     * @method BelongsToMany|_RoleQueryBuilder roles()
     * @method _UserQueryBuilder newModelQuery()
     * @method _UserQueryBuilder newQuery()
     * @method static _UserQueryBuilder query()
     * @method static _UserCollection|User[] all()
     * @method _UserQueryBuilder withTrashed()
     * @method _UserQueryBuilder onlyTrashed()
     * @method _UserQueryBuilder withoutTrashed()
     * @mixin _UserQueryBuilder
     */
    class User extends Model
    {
    }

    /**
     * @property string $email_from
     * @property string $email_to
     * @method _UserEmailRelationshipQueryBuilder newModelQuery()
     * @method _UserEmailRelationshipQueryBuilder newQuery()
     * @method static _UserEmailRelationshipQueryBuilder query()
     * @method static _UserEmailRelationshipCollection|UserEmailRelationship[] all()
     * @mixin _UserEmailRelationshipQueryBuilder
     */
    class UserEmailRelationship extends Model
    {
    }

    /**
     * @property int $id
     * @property string|null $avatar
     * @property string|null $original_name
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method _VaporFileQueryBuilder newModelQuery()
     * @method _VaporFileQueryBuilder newQuery()
     * @method static _VaporFileQueryBuilder query()
     * @method static _VaporFileCollection|VaporFile[] all()
     * @mixin _VaporFileQueryBuilder
     */
    class VaporFile extends Model
    {
    }

    /**
     * @property int $id
     * @property string $model
     * @property _WheelCollection|Wheel[] $wheels
     * @method HasMany|_WheelQueryBuilder wheels()
     * @property _WheelCollection|Wheel[] $wheels
     * @method HasMany|_WheelQueryBuilder wheels()
     * @method _VehicleQueryBuilder newModelQuery()
     * @method _VehicleQueryBuilder newQuery()
     * @method static _VehicleQueryBuilder query()
     * @method static _VehicleCollection|Vehicle[] all()
     * @mixin _VehicleQueryBuilder
     */
    class Vehicle extends Model
    {
    }

    /**
     * @property int $id
     * @property int $vehicle_id
     * @property-read string $test
     * @property-read string $test
     * @property Vehicle $vehicle
     * @method BelongsTo|_VehicleQueryBuilder vehicle()
     * @property Vehicle $vehicle
     * @method BelongsTo|_VehicleQueryBuilder vehicle()
     * @method _WheelQueryBuilder newModelQuery()
     * @method _WheelQueryBuilder newQuery()
     * @method static _WheelQueryBuilder query()
     * @method static _WheelCollection|Wheel[] all()
     * @mixin _WheelQueryBuilder
     */
    class Wheel extends Model
    {
    }
}
namespace Laravel\Nova\Trix {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Laravel\Nova\Trix\_AttachmentCollection;
    use LaravelIdea\Helper\Laravel\Nova\Trix\_AttachmentQueryBuilder;
    use LaravelIdea\Helper\Laravel\Nova\Trix\_PendingAttachmentCollection;
    use LaravelIdea\Helper\Laravel\Nova\Trix\_PendingAttachmentQueryBuilder;

    /**
     * @property int $id
     * @property string $attachable_type
     * @property int $attachable_id
     * @property string $attachment
     * @property string $disk
     * @property string $url
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method _AttachmentQueryBuilder newModelQuery()
     * @method _AttachmentQueryBuilder newQuery()
     * @method static _AttachmentQueryBuilder query()
     * @method static _AttachmentCollection|Attachment[] all()
     * @mixin _AttachmentQueryBuilder
     */
    class Attachment extends Model
    {
    }

    /**
     * @property int $id
     * @property string $draft_id
     * @property string $attachment
     * @property string $disk
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method _PendingAttachmentQueryBuilder newModelQuery()
     * @method _PendingAttachmentQueryBuilder newQuery()
     * @method static _PendingAttachmentQueryBuilder query()
     * @method static _PendingAttachmentCollection|PendingAttachment[] all()
     * @mixin _PendingAttachmentQueryBuilder
     */
    class PendingAttachment extends Model
    {
    }
}
