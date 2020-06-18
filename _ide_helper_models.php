<?php
/** @noinspection PhpUndefinedClassInspection */
/** @noinspection PhpFullyQualifiedNameUsageInspection */
/** @noinspection PhpUnusedAliasInspection */

namespace App {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Database\Eloquent\Scope;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\_BadgeCollection;
    use LaravelIdea\Helper\App\_BadgeQueryBuilder;
    use LaravelIdea\Helper\App\_DeviceCollection;
    use LaravelIdea\Helper\App\_DeviceQueryBuilder;
    use LaravelIdea\Helper\App\_EmployeeCollection;
    use LaravelIdea\Helper\App\_EmployeeQueryBuilder;
    use LaravelIdea\Helper\App\_EventCollection;
    use LaravelIdea\Helper\App\_EventQueryBuilder;
    use LaravelIdea\Helper\App\_EventTypeCollection;
    use LaravelIdea\Helper\App\_EventTypeQueryBuilder;
    use LaravelIdea\Helper\App\_MapCollection;
    use LaravelIdea\Helper\App\_MapQueryBuilder;
    use LaravelIdea\Helper\App\_StatusCollection;
    use LaravelIdea\Helper\App\_StatusQueryBuilder;
    use LaravelIdea\Helper\App\_UserCollection;
    use LaravelIdea\Helper\App\_UserQueryBuilder;
    use LaravelIdea\Helper\Illuminate\Notifications\_DatabaseNotificationCollection;
    use LaravelIdea\Helper\Illuminate\Notifications\_DatabaseNotificationQueryBuilder;

    /**
     * @property int $id
     * @property string $code
     * @property bool $status
     * @property int|null $employee_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _BadgeQueryBuilder newModelQuery()
     * @method static _BadgeQueryBuilder newQuery()
     * @method static _BadgeQueryBuilder query()
     * @method static _BadgeCollection|Badge[] all()
     * @method static _BadgeQueryBuilder whereId($value)
     * @method static _BadgeQueryBuilder whereCode($value)
     * @method static _BadgeQueryBuilder whereStatus($value)
     * @method static _BadgeQueryBuilder whereEmployeeId($value)
     * @method static _BadgeQueryBuilder whereCreatedAt($value)
     * @method static _BadgeQueryBuilder whereUpdatedAt($value)
     * @method static mixed aggregate(string $function, array $columns = ['*'])
     * @method static mixed avg(string $column)
     * @method static bool chunk(int $count, callable $callback)
     * @method static bool chunkById(int $count, callable $callback, null|string $column = null, null|string $alias = null)
     * @method static int count(string $columns = '*')
     * @method static Badge create(array $attributes = [])
     * @method static _BadgeQueryBuilder crossJoin(string $table, \Closure|null|string $first = null, null|string $operator = null, null|string $second = null)
     * @method static _BadgeCollection|Badge[] cursor()
     * @method static int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static bool doesntExist()
     * @method static bool doesntExistOr(\Closure $callback)
     * @method static _BadgeQueryBuilder each(callable $callback, int $count = 1000)
     * @method static bool eachById(callable $callback, int $count = 1000, null|string $column = null, null|string $alias = null)
     * @method static bool exists()
     * @method static bool existsOr(\Closure $callback)
     * @method static Badge|null find($id, array $columns = ['*'])
     * @method static _BadgeCollection|Badge[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method static Badge findOrFail($id, array $columns = ['*'])
     * @method static _BadgeCollection|Badge[] findOrNew($id, array $columns = ['*'])
     * @method static Badge first(array|string $columns = ['*'])
     * @method static Badge firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method static Badge firstOrCreate(array $attributes, array $values = [])
     * @method static Badge firstOrFail(array $columns = ['*'])
     * @method static Badge firstOrNew(array $attributes = [], array $values = [])
     * @method static Badge firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method static Badge forceCreate(array $attributes)
     * @method static _BadgeCollection|Badge[] fromQuery(string $query, array $bindings = [])
     * @method static _BadgeCollection|Badge[] get(array|string $columns = ['*'])
     * @method static int getCountForPagination(array $columns = ['*'])
     * @method static Badge getModel()
     * @method static Badge[] getModels(array|string $columns = ['*'])
     * @method static _BadgeQueryBuilder getQuery()
     * @method static _BadgeQueryBuilder groupBy(array $groups)
     * @method static bool hasGlobalMacro(string $name)
     * @method static bool hasMacro(string $name)
     * @method static bool hasNamedScope(string $scope)
     * @method static _BadgeCollection|Badge[] hydrate(array $items)
     * @method static int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method static bool insert(array $values)
     * @method static int insertGetId(array $values, null|string $sequence = null)
     * @method static int insertOrIgnore(array $values)
     * @method static int insertUsing(array $columns, \Closure|\Illuminate\Database\Query\Builder|string $query)
     * @method static _BadgeQueryBuilder join(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null, string $type = 'inner', bool $where = false)
     * @method static _BadgeQueryBuilder latest(string $column = null)
     * @method static _BadgeQueryBuilder leftJoin(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @method static _BadgeQueryBuilder limit(int $value)
     * @method static Badge make(array $attributes = [])
     * @method static mixed max(string $column)
     * @method static mixed min(string $column)
     * @method static Badge newModelInstance(array $attributes = [])
     * @method static int numericAggregate(string $function, array $columns = ['*'])
     * @method static _BadgeQueryBuilder offset(int $value)
     * @method static _BadgeQueryBuilder oldest(string $column = null)
     * @method static _BadgeQueryBuilder orderBy(\Closure|\Illuminate\Database\Query\Builder|Expression|string $column, string $direction = 'asc')
     * @method static _BadgeQueryBuilder orderByDesc(string $column)
     * @method static _BadgeQueryBuilder orderByRaw(string $sql, array $bindings = [])
     * @method static _BadgeQueryBuilder paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method static _BadgeQueryBuilder rightJoin(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @method static _BadgeQueryBuilder select(array $columns = ['*'])
     * @method static _BadgeQueryBuilder setQuery(\Illuminate\Database\Query\Builder $query)
     * @method static _BadgeQueryBuilder simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method static _BadgeQueryBuilder skip(int $value)
     * @method static mixed sum(string $column)
     * @method static _BadgeQueryBuilder take(int $value)
     * @method static _BadgeQueryBuilder tap(callable $callback)
     * @method static _BadgeQueryBuilder truncate()
     * @method static _BadgeQueryBuilder unless($value, callable $callback, callable|null $default = null)
     * @method static int update(array $values)
     * @method static Badge updateOrCreate(array $attributes, array $values = [])
     * @method static bool updateOrInsert(array $attributes, array $values = [])
     * @method static _BadgeQueryBuilder when($value, callable $callback, callable|null $default = null)
     * @method static _BadgeQueryBuilder where(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method static _BadgeQueryBuilder whereBetween(string $column, array $values, string $boolean = 'and', bool $not = false)
     * @method static _BadgeQueryBuilder whereColumn(array|string $first, null|string $operator = null, null|string $second = null, null|string $boolean = 'and')
     * @method static _BadgeQueryBuilder whereDate(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _BadgeQueryBuilder whereDay(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _BadgeQueryBuilder whereDoesntHave(string $relation, \Closure $callback = null)
     * @method static _BadgeQueryBuilder whereDoesntHaveMorph(string $relation, array|string $types, \Closure $callback = null)
     * @method static _BadgeQueryBuilder whereExists(\Closure $callback, string $boolean = 'and', bool $not = false)
     * @method static _BadgeQueryBuilder whereHas(string $relation, \Closure $callback = null, string $operator = '>=', int $count = 1)
     * @method static _BadgeQueryBuilder whereHasMorph(string $relation, array|string $types, \Closure $callback = null, string $operator = '>=', int $count = 1)
     * @method static _BadgeQueryBuilder whereIn(string $column, $values, string $boolean = 'and', bool $not = false)
     * @method static _BadgeQueryBuilder whereIntegerInRaw(string $column, array|Arrayable $values, string $boolean = 'and', bool $not = false)
     * @method static _BadgeQueryBuilder whereIntegerNotInRaw(string $column, array|Arrayable $values, string $boolean = 'and')
     * @method static _BadgeQueryBuilder whereJsonContains(string $column, $value, string $boolean = 'and', bool $not = false)
     * @method static _BadgeQueryBuilder whereJsonDoesntContain(string $column, $value, string $boolean = 'and')
     * @method static _BadgeQueryBuilder whereJsonLength(string $column, $operator, $value = null, string $boolean = 'and')
     * @method static _BadgeQueryBuilder whereKey($id)
     * @method static _BadgeQueryBuilder whereKeyNot($id)
     * @method static _BadgeQueryBuilder whereMonth(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _BadgeQueryBuilder whereNested(\Closure $callback, string $boolean = 'and')
     * @method static _BadgeQueryBuilder whereNotBetween(string $column, array $values, string $boolean = 'and')
     * @method static _BadgeQueryBuilder whereNotExists(\Closure $callback, string $boolean = 'and')
     * @method static _BadgeQueryBuilder whereNotIn(string $column, $values, string $boolean = 'and')
     * @method static _BadgeQueryBuilder whereNotNull(array|string $columns, string $boolean = 'and')
     * @method static _BadgeQueryBuilder whereNull(array|string $columns, string $boolean = 'and', bool $not = false)
     * @method static _BadgeQueryBuilder whereRaw(string $sql, $bindings = [], string $boolean = 'and')
     * @method static _BadgeQueryBuilder whereRowValues(array $columns, string $operator, array $values, string $boolean = 'and')
     * @method static _BadgeQueryBuilder whereTime(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _BadgeQueryBuilder whereYear(string $column, string $operator, \DateTimeInterface|int|null|string $value = null, string $boolean = 'and')
     * @method static _BadgeQueryBuilder with($relations)
     * @method static _BadgeQueryBuilder withCasts(array $casts)
     * @method static _BadgeQueryBuilder withCount($relations)
     * @method static _BadgeQueryBuilder withGlobalScope(string $identifier, \Closure|Scope $scope)
     * @method static _BadgeQueryBuilder without($relations)
     * @method static _BadgeQueryBuilder withoutGlobalScope(Scope|string $scope)
     * @method static _BadgeQueryBuilder withoutGlobalScopes(array $scopes = null)
     */
    class Badge extends Model
    {
    }

    /**
     * @property int $id
     * @property string $name
     * @property string|null $description
     * @property string $serial
     * @property string $ip
     * @property int $x
     * @property int $y
     * @property int $level
     * @property int $map_id
     * @property int $status_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _DeviceQueryBuilder newModelQuery()
     * @method static _DeviceQueryBuilder newQuery()
     * @method static _DeviceQueryBuilder query()
     * @method static _DeviceCollection|Device[] all()
     * @method static _DeviceQueryBuilder whereId($value)
     * @method static _DeviceQueryBuilder whereName($value)
     * @method static _DeviceQueryBuilder whereDescription($value)
     * @method static _DeviceQueryBuilder whereSerial($value)
     * @method static _DeviceQueryBuilder whereIp($value)
     * @method static _DeviceQueryBuilder whereX($value)
     * @method static _DeviceQueryBuilder whereY($value)
     * @method static _DeviceQueryBuilder whereLevel($value)
     * @method static _DeviceQueryBuilder whereMapId($value)
     * @method static _DeviceQueryBuilder whereStatusId($value)
     * @method static _DeviceQueryBuilder whereCreatedAt($value)
     * @method static _DeviceQueryBuilder whereUpdatedAt($value)
     * @method static mixed aggregate(string $function, array $columns = ['*'])
     * @method static mixed avg(string $column)
     * @method static bool chunk(int $count, callable $callback)
     * @method static bool chunkById(int $count, callable $callback, null|string $column = null, null|string $alias = null)
     * @method static int count(string $columns = '*')
     * @method static Device create(array $attributes = [])
     * @method static _DeviceQueryBuilder crossJoin(string $table, \Closure|null|string $first = null, null|string $operator = null, null|string $second = null)
     * @method static _DeviceCollection|Device[] cursor()
     * @method static int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static bool doesntExist()
     * @method static bool doesntExistOr(\Closure $callback)
     * @method static _DeviceQueryBuilder each(callable $callback, int $count = 1000)
     * @method static bool eachById(callable $callback, int $count = 1000, null|string $column = null, null|string $alias = null)
     * @method static bool exists()
     * @method static bool existsOr(\Closure $callback)
     * @method static Device|null find($id, array $columns = ['*'])
     * @method static _DeviceCollection|Device[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method static Device findOrFail($id, array $columns = ['*'])
     * @method static _DeviceCollection|Device[] findOrNew($id, array $columns = ['*'])
     * @method static Device first(array|string $columns = ['*'])
     * @method static Device firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method static Device firstOrCreate(array $attributes, array $values = [])
     * @method static Device firstOrFail(array $columns = ['*'])
     * @method static Device firstOrNew(array $attributes = [], array $values = [])
     * @method static Device firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method static Device forceCreate(array $attributes)
     * @method static _DeviceCollection|Device[] fromQuery(string $query, array $bindings = [])
     * @method static _DeviceCollection|Device[] get(array|string $columns = ['*'])
     * @method static int getCountForPagination(array $columns = ['*'])
     * @method static Device getModel()
     * @method static Device[] getModels(array|string $columns = ['*'])
     * @method static _DeviceQueryBuilder getQuery()
     * @method static _DeviceQueryBuilder groupBy(array $groups)
     * @method static bool hasGlobalMacro(string $name)
     * @method static bool hasMacro(string $name)
     * @method static bool hasNamedScope(string $scope)
     * @method static _DeviceCollection|Device[] hydrate(array $items)
     * @method static int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method static bool insert(array $values)
     * @method static int insertGetId(array $values, null|string $sequence = null)
     * @method static int insertOrIgnore(array $values)
     * @method static int insertUsing(array $columns, \Closure|\Illuminate\Database\Query\Builder|string $query)
     * @method static _DeviceQueryBuilder join(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null, string $type = 'inner', bool $where = false)
     * @method static _DeviceQueryBuilder latest(string $column = null)
     * @method static _DeviceQueryBuilder leftJoin(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @method static _DeviceQueryBuilder limit(int $value)
     * @method static Device make(array $attributes = [])
     * @method static mixed max(string $column)
     * @method static mixed min(string $column)
     * @method static Device newModelInstance(array $attributes = [])
     * @method static int numericAggregate(string $function, array $columns = ['*'])
     * @method static _DeviceQueryBuilder offset(int $value)
     * @method static _DeviceQueryBuilder oldest(string $column = null)
     * @method static _DeviceQueryBuilder orderBy(\Closure|\Illuminate\Database\Query\Builder|Expression|string $column, string $direction = 'asc')
     * @method static _DeviceQueryBuilder orderByDesc(string $column)
     * @method static _DeviceQueryBuilder orderByRaw(string $sql, array $bindings = [])
     * @method static _DeviceQueryBuilder paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method static _DeviceQueryBuilder rightJoin(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @method static _DeviceQueryBuilder select(array $columns = ['*'])
     * @method static _DeviceQueryBuilder setQuery(\Illuminate\Database\Query\Builder $query)
     * @method static _DeviceQueryBuilder simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method static _DeviceQueryBuilder skip(int $value)
     * @method static mixed sum(string $column)
     * @method static _DeviceQueryBuilder take(int $value)
     * @method static _DeviceQueryBuilder tap(callable $callback)
     * @method static _DeviceQueryBuilder truncate()
     * @method static _DeviceQueryBuilder unless($value, callable $callback, callable|null $default = null)
     * @method static int update(array $values)
     * @method static Device updateOrCreate(array $attributes, array $values = [])
     * @method static bool updateOrInsert(array $attributes, array $values = [])
     * @method static _DeviceQueryBuilder when($value, callable $callback, callable|null $default = null)
     * @method static _DeviceQueryBuilder where(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method static _DeviceQueryBuilder whereBetween(string $column, array $values, string $boolean = 'and', bool $not = false)
     * @method static _DeviceQueryBuilder whereColumn(array|string $first, null|string $operator = null, null|string $second = null, null|string $boolean = 'and')
     * @method static _DeviceQueryBuilder whereDate(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _DeviceQueryBuilder whereDay(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _DeviceQueryBuilder whereDoesntHave(string $relation, \Closure $callback = null)
     * @method static _DeviceQueryBuilder whereDoesntHaveMorph(string $relation, array|string $types, \Closure $callback = null)
     * @method static _DeviceQueryBuilder whereExists(\Closure $callback, string $boolean = 'and', bool $not = false)
     * @method static _DeviceQueryBuilder whereHas(string $relation, \Closure $callback = null, string $operator = '>=', int $count = 1)
     * @method static _DeviceQueryBuilder whereHasMorph(string $relation, array|string $types, \Closure $callback = null, string $operator = '>=', int $count = 1)
     * @method static _DeviceQueryBuilder whereIn(string $column, $values, string $boolean = 'and', bool $not = false)
     * @method static _DeviceQueryBuilder whereIntegerInRaw(string $column, array|Arrayable $values, string $boolean = 'and', bool $not = false)
     * @method static _DeviceQueryBuilder whereIntegerNotInRaw(string $column, array|Arrayable $values, string $boolean = 'and')
     * @method static _DeviceQueryBuilder whereJsonContains(string $column, $value, string $boolean = 'and', bool $not = false)
     * @method static _DeviceQueryBuilder whereJsonDoesntContain(string $column, $value, string $boolean = 'and')
     * @method static _DeviceQueryBuilder whereJsonLength(string $column, $operator, $value = null, string $boolean = 'and')
     * @method static _DeviceQueryBuilder whereKey($id)
     * @method static _DeviceQueryBuilder whereKeyNot($id)
     * @method static _DeviceQueryBuilder whereMonth(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _DeviceQueryBuilder whereNested(\Closure $callback, string $boolean = 'and')
     * @method static _DeviceQueryBuilder whereNotBetween(string $column, array $values, string $boolean = 'and')
     * @method static _DeviceQueryBuilder whereNotExists(\Closure $callback, string $boolean = 'and')
     * @method static _DeviceQueryBuilder whereNotIn(string $column, $values, string $boolean = 'and')
     * @method static _DeviceQueryBuilder whereNotNull(array|string $columns, string $boolean = 'and')
     * @method static _DeviceQueryBuilder whereNull(array|string $columns, string $boolean = 'and', bool $not = false)
     * @method static _DeviceQueryBuilder whereRaw(string $sql, $bindings = [], string $boolean = 'and')
     * @method static _DeviceQueryBuilder whereRowValues(array $columns, string $operator, array $values, string $boolean = 'and')
     * @method static _DeviceQueryBuilder whereTime(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _DeviceQueryBuilder whereYear(string $column, string $operator, \DateTimeInterface|int|null|string $value = null, string $boolean = 'and')
     * @method static _DeviceQueryBuilder with($relations)
     * @method static _DeviceQueryBuilder withCasts(array $casts)
     * @method static _DeviceQueryBuilder withCount($relations)
     * @method static _DeviceQueryBuilder withGlobalScope(string $identifier, \Closure|Scope $scope)
     * @method static _DeviceQueryBuilder without($relations)
     * @method static _DeviceQueryBuilder withoutGlobalScope(Scope|string $scope)
     * @method static _DeviceQueryBuilder withoutGlobalScopes(array $scopes = null)
     */
    class Device extends Model
    {
    }

    /**
     * @property int $id
     * @property string $first_name
     * @property string $last_name
     * @property string $id_number
     * @property string|null $img_path
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _EmployeeQueryBuilder newModelQuery()
     * @method static _EmployeeQueryBuilder newQuery()
     * @method static _EmployeeQueryBuilder query()
     * @method static _EmployeeCollection|Employee[] all()
     * @method static _EmployeeQueryBuilder whereId($value)
     * @method static _EmployeeQueryBuilder whereFirstName($value)
     * @method static _EmployeeQueryBuilder whereLastName($value)
     * @method static _EmployeeQueryBuilder whereIdNumber($value)
     * @method static _EmployeeQueryBuilder whereImgPath($value)
     * @method static _EmployeeQueryBuilder whereCreatedAt($value)
     * @method static _EmployeeQueryBuilder whereUpdatedAt($value)
     * @method static mixed aggregate(string $function, array $columns = ['*'])
     * @method static mixed avg(string $column)
     * @method static bool chunk(int $count, callable $callback)
     * @method static bool chunkById(int $count, callable $callback, null|string $column = null, null|string $alias = null)
     * @method static int count(string $columns = '*')
     * @method static Employee create(array $attributes = [])
     * @method static _EmployeeQueryBuilder crossJoin(string $table, \Closure|null|string $first = null, null|string $operator = null, null|string $second = null)
     * @method static _EmployeeCollection|Employee[] cursor()
     * @method static int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static bool doesntExist()
     * @method static bool doesntExistOr(\Closure $callback)
     * @method static _EmployeeQueryBuilder each(callable $callback, int $count = 1000)
     * @method static bool eachById(callable $callback, int $count = 1000, null|string $column = null, null|string $alias = null)
     * @method static bool exists()
     * @method static bool existsOr(\Closure $callback)
     * @method static Employee|null find($id, array $columns = ['*'])
     * @method static _EmployeeCollection|Employee[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method static Employee findOrFail($id, array $columns = ['*'])
     * @method static _EmployeeCollection|Employee[] findOrNew($id, array $columns = ['*'])
     * @method static Employee first(array|string $columns = ['*'])
     * @method static Employee firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method static Employee firstOrCreate(array $attributes, array $values = [])
     * @method static Employee firstOrFail(array $columns = ['*'])
     * @method static Employee firstOrNew(array $attributes = [], array $values = [])
     * @method static Employee firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method static Employee forceCreate(array $attributes)
     * @method static _EmployeeCollection|Employee[] fromQuery(string $query, array $bindings = [])
     * @method static _EmployeeCollection|Employee[] get(array|string $columns = ['*'])
     * @method static int getCountForPagination(array $columns = ['*'])
     * @method static Employee getModel()
     * @method static Employee[] getModels(array|string $columns = ['*'])
     * @method static _EmployeeQueryBuilder getQuery()
     * @method static _EmployeeQueryBuilder groupBy(array $groups)
     * @method static bool hasGlobalMacro(string $name)
     * @method static bool hasMacro(string $name)
     * @method static bool hasNamedScope(string $scope)
     * @method static _EmployeeCollection|Employee[] hydrate(array $items)
     * @method static int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method static bool insert(array $values)
     * @method static int insertGetId(array $values, null|string $sequence = null)
     * @method static int insertOrIgnore(array $values)
     * @method static int insertUsing(array $columns, \Closure|\Illuminate\Database\Query\Builder|string $query)
     * @method static _EmployeeQueryBuilder join(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null, string $type = 'inner', bool $where = false)
     * @method static _EmployeeQueryBuilder latest(string $column = null)
     * @method static _EmployeeQueryBuilder leftJoin(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @method static _EmployeeQueryBuilder limit(int $value)
     * @method static Employee make(array $attributes = [])
     * @method static mixed max(string $column)
     * @method static mixed min(string $column)
     * @method static Employee newModelInstance(array $attributes = [])
     * @method static int numericAggregate(string $function, array $columns = ['*'])
     * @method static _EmployeeQueryBuilder offset(int $value)
     * @method static _EmployeeQueryBuilder oldest(string $column = null)
     * @method static _EmployeeQueryBuilder orderBy(\Closure|\Illuminate\Database\Query\Builder|Expression|string $column, string $direction = 'asc')
     * @method static _EmployeeQueryBuilder orderByDesc(string $column)
     * @method static _EmployeeQueryBuilder orderByRaw(string $sql, array $bindings = [])
     * @method static _EmployeeQueryBuilder paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method static _EmployeeQueryBuilder rightJoin(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @method static _EmployeeQueryBuilder select(array $columns = ['*'])
     * @method static _EmployeeQueryBuilder setQuery(\Illuminate\Database\Query\Builder $query)
     * @method static _EmployeeQueryBuilder simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method static _EmployeeQueryBuilder skip(int $value)
     * @method static mixed sum(string $column)
     * @method static _EmployeeQueryBuilder take(int $value)
     * @method static _EmployeeQueryBuilder tap(callable $callback)
     * @method static _EmployeeQueryBuilder truncate()
     * @method static _EmployeeQueryBuilder unless($value, callable $callback, callable|null $default = null)
     * @method static int update(array $values)
     * @method static Employee updateOrCreate(array $attributes, array $values = [])
     * @method static bool updateOrInsert(array $attributes, array $values = [])
     * @method static _EmployeeQueryBuilder when($value, callable $callback, callable|null $default = null)
     * @method static _EmployeeQueryBuilder where(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method static _EmployeeQueryBuilder whereBetween(string $column, array $values, string $boolean = 'and', bool $not = false)
     * @method static _EmployeeQueryBuilder whereColumn(array|string $first, null|string $operator = null, null|string $second = null, null|string $boolean = 'and')
     * @method static _EmployeeQueryBuilder whereDate(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _EmployeeQueryBuilder whereDay(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _EmployeeQueryBuilder whereDoesntHave(string $relation, \Closure $callback = null)
     * @method static _EmployeeQueryBuilder whereDoesntHaveMorph(string $relation, array|string $types, \Closure $callback = null)
     * @method static _EmployeeQueryBuilder whereExists(\Closure $callback, string $boolean = 'and', bool $not = false)
     * @method static _EmployeeQueryBuilder whereHas(string $relation, \Closure $callback = null, string $operator = '>=', int $count = 1)
     * @method static _EmployeeQueryBuilder whereHasMorph(string $relation, array|string $types, \Closure $callback = null, string $operator = '>=', int $count = 1)
     * @method static _EmployeeQueryBuilder whereIn(string $column, $values, string $boolean = 'and', bool $not = false)
     * @method static _EmployeeQueryBuilder whereIntegerInRaw(string $column, array|Arrayable $values, string $boolean = 'and', bool $not = false)
     * @method static _EmployeeQueryBuilder whereIntegerNotInRaw(string $column, array|Arrayable $values, string $boolean = 'and')
     * @method static _EmployeeQueryBuilder whereJsonContains(string $column, $value, string $boolean = 'and', bool $not = false)
     * @method static _EmployeeQueryBuilder whereJsonDoesntContain(string $column, $value, string $boolean = 'and')
     * @method static _EmployeeQueryBuilder whereJsonLength(string $column, $operator, $value = null, string $boolean = 'and')
     * @method static _EmployeeQueryBuilder whereKey($id)
     * @method static _EmployeeQueryBuilder whereKeyNot($id)
     * @method static _EmployeeQueryBuilder whereMonth(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _EmployeeQueryBuilder whereNested(\Closure $callback, string $boolean = 'and')
     * @method static _EmployeeQueryBuilder whereNotBetween(string $column, array $values, string $boolean = 'and')
     * @method static _EmployeeQueryBuilder whereNotExists(\Closure $callback, string $boolean = 'and')
     * @method static _EmployeeQueryBuilder whereNotIn(string $column, $values, string $boolean = 'and')
     * @method static _EmployeeQueryBuilder whereNotNull(array|string $columns, string $boolean = 'and')
     * @method static _EmployeeQueryBuilder whereNull(array|string $columns, string $boolean = 'and', bool $not = false)
     * @method static _EmployeeQueryBuilder whereRaw(string $sql, $bindings = [], string $boolean = 'and')
     * @method static _EmployeeQueryBuilder whereRowValues(array $columns, string $operator, array $values, string $boolean = 'and')
     * @method static _EmployeeQueryBuilder whereTime(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _EmployeeQueryBuilder whereYear(string $column, string $operator, \DateTimeInterface|int|null|string $value = null, string $boolean = 'and')
     * @method static _EmployeeQueryBuilder with($relations)
     * @method static _EmployeeQueryBuilder withCasts(array $casts)
     * @method static _EmployeeQueryBuilder withCount($relations)
     * @method static _EmployeeQueryBuilder withGlobalScope(string $identifier, \Closure|Scope $scope)
     * @method static _EmployeeQueryBuilder without($relations)
     * @method static _EmployeeQueryBuilder withoutGlobalScope(Scope|string $scope)
     * @method static _EmployeeQueryBuilder withoutGlobalScopes(array $scopes = null)
     */
    class Employee extends Model
    {
    }

    /**
     * @property int $id
     * @property int $type_id
     * @property int|null $employee_id
     * @property int|null $device_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _EventQueryBuilder newModelQuery()
     * @method static _EventQueryBuilder newQuery()
     * @method static _EventQueryBuilder query()
     * @method static _EventCollection|Event[] all()
     * @method static _EventQueryBuilder whereId($value)
     * @method static _EventQueryBuilder whereTypeId($value)
     * @method static _EventQueryBuilder whereEmployeeId($value)
     * @method static _EventQueryBuilder whereDeviceId($value)
     * @method static _EventQueryBuilder whereCreatedAt($value)
     * @method static _EventQueryBuilder whereUpdatedAt($value)
     * @method static mixed aggregate(string $function, array $columns = ['*'])
     * @method static mixed avg(string $column)
     * @method static bool chunk(int $count, callable $callback)
     * @method static bool chunkById(int $count, callable $callback, null|string $column = null, null|string $alias = null)
     * @method static int count(string $columns = '*')
     * @method static Event create(array $attributes = [])
     * @method static _EventQueryBuilder crossJoin(string $table, \Closure|null|string $first = null, null|string $operator = null, null|string $second = null)
     * @method static _EventCollection|Event[] cursor()
     * @method static int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static bool doesntExist()
     * @method static bool doesntExistOr(\Closure $callback)
     * @method static _EventQueryBuilder each(callable $callback, int $count = 1000)
     * @method static bool eachById(callable $callback, int $count = 1000, null|string $column = null, null|string $alias = null)
     * @method static bool exists()
     * @method static bool existsOr(\Closure $callback)
     * @method static Event|null find($id, array $columns = ['*'])
     * @method static _EventCollection|Event[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method static Event findOrFail($id, array $columns = ['*'])
     * @method static _EventCollection|Event[] findOrNew($id, array $columns = ['*'])
     * @method static Event first(array|string $columns = ['*'])
     * @method static Event firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method static Event firstOrCreate(array $attributes, array $values = [])
     * @method static Event firstOrFail(array $columns = ['*'])
     * @method static Event firstOrNew(array $attributes = [], array $values = [])
     * @method static Event firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method static Event forceCreate(array $attributes)
     * @method static _EventCollection|Event[] fromQuery(string $query, array $bindings = [])
     * @method static _EventCollection|Event[] get(array|string $columns = ['*'])
     * @method static int getCountForPagination(array $columns = ['*'])
     * @method static Event getModel()
     * @method static Event[] getModels(array|string $columns = ['*'])
     * @method static _EventQueryBuilder getQuery()
     * @method static _EventQueryBuilder groupBy(array $groups)
     * @method static bool hasGlobalMacro(string $name)
     * @method static bool hasMacro(string $name)
     * @method static bool hasNamedScope(string $scope)
     * @method static _EventCollection|Event[] hydrate(array $items)
     * @method static int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method static bool insert(array $values)
     * @method static int insertGetId(array $values, null|string $sequence = null)
     * @method static int insertOrIgnore(array $values)
     * @method static int insertUsing(array $columns, \Closure|\Illuminate\Database\Query\Builder|string $query)
     * @method static _EventQueryBuilder join(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null, string $type = 'inner', bool $where = false)
     * @method static _EventQueryBuilder latest(string $column = null)
     * @method static _EventQueryBuilder leftJoin(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @method static _EventQueryBuilder limit(int $value)
     * @method static Event make(array $attributes = [])
     * @method static mixed max(string $column)
     * @method static mixed min(string $column)
     * @method static Event newModelInstance(array $attributes = [])
     * @method static int numericAggregate(string $function, array $columns = ['*'])
     * @method static _EventQueryBuilder offset(int $value)
     * @method static _EventQueryBuilder oldest(string $column = null)
     * @method static _EventQueryBuilder orderBy(\Closure|\Illuminate\Database\Query\Builder|Expression|string $column, string $direction = 'asc')
     * @method static _EventQueryBuilder orderByDesc(string $column)
     * @method static _EventQueryBuilder orderByRaw(string $sql, array $bindings = [])
     * @method static _EventQueryBuilder paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method static _EventQueryBuilder rightJoin(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @method static _EventQueryBuilder select(array $columns = ['*'])
     * @method static _EventQueryBuilder setQuery(\Illuminate\Database\Query\Builder $query)
     * @method static _EventQueryBuilder simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method static _EventQueryBuilder skip(int $value)
     * @method static mixed sum(string $column)
     * @method static _EventQueryBuilder take(int $value)
     * @method static _EventQueryBuilder tap(callable $callback)
     * @method static _EventQueryBuilder truncate()
     * @method static _EventQueryBuilder unless($value, callable $callback, callable|null $default = null)
     * @method static int update(array $values)
     * @method static Event updateOrCreate(array $attributes, array $values = [])
     * @method static bool updateOrInsert(array $attributes, array $values = [])
     * @method static _EventQueryBuilder when($value, callable $callback, callable|null $default = null)
     * @method static _EventQueryBuilder where(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method static _EventQueryBuilder whereBetween(string $column, array $values, string $boolean = 'and', bool $not = false)
     * @method static _EventQueryBuilder whereColumn(array|string $first, null|string $operator = null, null|string $second = null, null|string $boolean = 'and')
     * @method static _EventQueryBuilder whereDate(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _EventQueryBuilder whereDay(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _EventQueryBuilder whereDoesntHave(string $relation, \Closure $callback = null)
     * @method static _EventQueryBuilder whereDoesntHaveMorph(string $relation, array|string $types, \Closure $callback = null)
     * @method static _EventQueryBuilder whereExists(\Closure $callback, string $boolean = 'and', bool $not = false)
     * @method static _EventQueryBuilder whereHas(string $relation, \Closure $callback = null, string $operator = '>=', int $count = 1)
     * @method static _EventQueryBuilder whereHasMorph(string $relation, array|string $types, \Closure $callback = null, string $operator = '>=', int $count = 1)
     * @method static _EventQueryBuilder whereIn(string $column, $values, string $boolean = 'and', bool $not = false)
     * @method static _EventQueryBuilder whereIntegerInRaw(string $column, array|Arrayable $values, string $boolean = 'and', bool $not = false)
     * @method static _EventQueryBuilder whereIntegerNotInRaw(string $column, array|Arrayable $values, string $boolean = 'and')
     * @method static _EventQueryBuilder whereJsonContains(string $column, $value, string $boolean = 'and', bool $not = false)
     * @method static _EventQueryBuilder whereJsonDoesntContain(string $column, $value, string $boolean = 'and')
     * @method static _EventQueryBuilder whereJsonLength(string $column, $operator, $value = null, string $boolean = 'and')
     * @method static _EventQueryBuilder whereKey($id)
     * @method static _EventQueryBuilder whereKeyNot($id)
     * @method static _EventQueryBuilder whereMonth(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _EventQueryBuilder whereNested(\Closure $callback, string $boolean = 'and')
     * @method static _EventQueryBuilder whereNotBetween(string $column, array $values, string $boolean = 'and')
     * @method static _EventQueryBuilder whereNotExists(\Closure $callback, string $boolean = 'and')
     * @method static _EventQueryBuilder whereNotIn(string $column, $values, string $boolean = 'and')
     * @method static _EventQueryBuilder whereNotNull(array|string $columns, string $boolean = 'and')
     * @method static _EventQueryBuilder whereNull(array|string $columns, string $boolean = 'and', bool $not = false)
     * @method static _EventQueryBuilder whereRaw(string $sql, $bindings = [], string $boolean = 'and')
     * @method static _EventQueryBuilder whereRowValues(array $columns, string $operator, array $values, string $boolean = 'and')
     * @method static _EventQueryBuilder whereTime(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _EventQueryBuilder whereYear(string $column, string $operator, \DateTimeInterface|int|null|string $value = null, string $boolean = 'and')
     * @method static _EventQueryBuilder with($relations)
     * @method static _EventQueryBuilder withCasts(array $casts)
     * @method static _EventQueryBuilder withCount($relations)
     * @method static _EventQueryBuilder withGlobalScope(string $identifier, \Closure|Scope $scope)
     * @method static _EventQueryBuilder without($relations)
     * @method static _EventQueryBuilder withoutGlobalScope(Scope|string $scope)
     * @method static _EventQueryBuilder withoutGlobalScopes(array $scopes = null)
     */
    class Event extends Model
    {
    }

    /**
     * @property int $id
     * @property string $name
     * @property string $description
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _EventTypeQueryBuilder newModelQuery()
     * @method static _EventTypeQueryBuilder newQuery()
     * @method static _EventTypeQueryBuilder query()
     * @method static _EventTypeCollection|EventType[] all()
     * @method static _EventTypeQueryBuilder whereId($value)
     * @method static _EventTypeQueryBuilder whereName($value)
     * @method static _EventTypeQueryBuilder whereDescription($value)
     * @method static _EventTypeQueryBuilder whereCreatedAt($value)
     * @method static _EventTypeQueryBuilder whereUpdatedAt($value)
     * @method static mixed aggregate(string $function, array $columns = ['*'])
     * @method static mixed avg(string $column)
     * @method static bool chunk(int $count, callable $callback)
     * @method static bool chunkById(int $count, callable $callback, null|string $column = null, null|string $alias = null)
     * @method static int count(string $columns = '*')
     * @method static EventType create(array $attributes = [])
     * @method static _EventTypeQueryBuilder crossJoin(string $table, \Closure|null|string $first = null, null|string $operator = null, null|string $second = null)
     * @method static _EventTypeCollection|EventType[] cursor()
     * @method static int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static bool doesntExist()
     * @method static bool doesntExistOr(\Closure $callback)
     * @method static _EventTypeQueryBuilder each(callable $callback, int $count = 1000)
     * @method static bool eachById(callable $callback, int $count = 1000, null|string $column = null, null|string $alias = null)
     * @method static bool exists()
     * @method static bool existsOr(\Closure $callback)
     * @method static EventType|null find($id, array $columns = ['*'])
     * @method static _EventTypeCollection|EventType[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method static EventType findOrFail($id, array $columns = ['*'])
     * @method static _EventTypeCollection|EventType[] findOrNew($id, array $columns = ['*'])
     * @method static EventType first(array|string $columns = ['*'])
     * @method static EventType firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method static EventType firstOrCreate(array $attributes, array $values = [])
     * @method static EventType firstOrFail(array $columns = ['*'])
     * @method static EventType firstOrNew(array $attributes = [], array $values = [])
     * @method static EventType firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method static EventType forceCreate(array $attributes)
     * @method static _EventTypeCollection|EventType[] fromQuery(string $query, array $bindings = [])
     * @method static _EventTypeCollection|EventType[] get(array|string $columns = ['*'])
     * @method static int getCountForPagination(array $columns = ['*'])
     * @method static EventType getModel()
     * @method static EventType[] getModels(array|string $columns = ['*'])
     * @method static _EventTypeQueryBuilder getQuery()
     * @method static _EventTypeQueryBuilder groupBy(array $groups)
     * @method static bool hasGlobalMacro(string $name)
     * @method static bool hasMacro(string $name)
     * @method static bool hasNamedScope(string $scope)
     * @method static _EventTypeCollection|EventType[] hydrate(array $items)
     * @method static int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method static bool insert(array $values)
     * @method static int insertGetId(array $values, null|string $sequence = null)
     * @method static int insertOrIgnore(array $values)
     * @method static int insertUsing(array $columns, \Closure|\Illuminate\Database\Query\Builder|string $query)
     * @method static _EventTypeQueryBuilder join(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null, string $type = 'inner', bool $where = false)
     * @method static _EventTypeQueryBuilder latest(string $column = null)
     * @method static _EventTypeQueryBuilder leftJoin(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @method static _EventTypeQueryBuilder limit(int $value)
     * @method static EventType make(array $attributes = [])
     * @method static mixed max(string $column)
     * @method static mixed min(string $column)
     * @method static EventType newModelInstance(array $attributes = [])
     * @method static int numericAggregate(string $function, array $columns = ['*'])
     * @method static _EventTypeQueryBuilder offset(int $value)
     * @method static _EventTypeQueryBuilder oldest(string $column = null)
     * @method static _EventTypeQueryBuilder orderBy(\Closure|\Illuminate\Database\Query\Builder|Expression|string $column, string $direction = 'asc')
     * @method static _EventTypeQueryBuilder orderByDesc(string $column)
     * @method static _EventTypeQueryBuilder orderByRaw(string $sql, array $bindings = [])
     * @method static _EventTypeQueryBuilder paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method static _EventTypeQueryBuilder rightJoin(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @method static _EventTypeQueryBuilder select(array $columns = ['*'])
     * @method static _EventTypeQueryBuilder setQuery(\Illuminate\Database\Query\Builder $query)
     * @method static _EventTypeQueryBuilder simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method static _EventTypeQueryBuilder skip(int $value)
     * @method static mixed sum(string $column)
     * @method static _EventTypeQueryBuilder take(int $value)
     * @method static _EventTypeQueryBuilder tap(callable $callback)
     * @method static _EventTypeQueryBuilder truncate()
     * @method static _EventTypeQueryBuilder unless($value, callable $callback, callable|null $default = null)
     * @method static int update(array $values)
     * @method static EventType updateOrCreate(array $attributes, array $values = [])
     * @method static bool updateOrInsert(array $attributes, array $values = [])
     * @method static _EventTypeQueryBuilder when($value, callable $callback, callable|null $default = null)
     * @method static _EventTypeQueryBuilder where(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method static _EventTypeQueryBuilder whereBetween(string $column, array $values, string $boolean = 'and', bool $not = false)
     * @method static _EventTypeQueryBuilder whereColumn(array|string $first, null|string $operator = null, null|string $second = null, null|string $boolean = 'and')
     * @method static _EventTypeQueryBuilder whereDate(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _EventTypeQueryBuilder whereDay(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _EventTypeQueryBuilder whereDoesntHave(string $relation, \Closure $callback = null)
     * @method static _EventTypeQueryBuilder whereDoesntHaveMorph(string $relation, array|string $types, \Closure $callback = null)
     * @method static _EventTypeQueryBuilder whereExists(\Closure $callback, string $boolean = 'and', bool $not = false)
     * @method static _EventTypeQueryBuilder whereHas(string $relation, \Closure $callback = null, string $operator = '>=', int $count = 1)
     * @method static _EventTypeQueryBuilder whereHasMorph(string $relation, array|string $types, \Closure $callback = null, string $operator = '>=', int $count = 1)
     * @method static _EventTypeQueryBuilder whereIn(string $column, $values, string $boolean = 'and', bool $not = false)
     * @method static _EventTypeQueryBuilder whereIntegerInRaw(string $column, array|Arrayable $values, string $boolean = 'and', bool $not = false)
     * @method static _EventTypeQueryBuilder whereIntegerNotInRaw(string $column, array|Arrayable $values, string $boolean = 'and')
     * @method static _EventTypeQueryBuilder whereJsonContains(string $column, $value, string $boolean = 'and', bool $not = false)
     * @method static _EventTypeQueryBuilder whereJsonDoesntContain(string $column, $value, string $boolean = 'and')
     * @method static _EventTypeQueryBuilder whereJsonLength(string $column, $operator, $value = null, string $boolean = 'and')
     * @method static _EventTypeQueryBuilder whereKey($id)
     * @method static _EventTypeQueryBuilder whereKeyNot($id)
     * @method static _EventTypeQueryBuilder whereMonth(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _EventTypeQueryBuilder whereNested(\Closure $callback, string $boolean = 'and')
     * @method static _EventTypeQueryBuilder whereNotBetween(string $column, array $values, string $boolean = 'and')
     * @method static _EventTypeQueryBuilder whereNotExists(\Closure $callback, string $boolean = 'and')
     * @method static _EventTypeQueryBuilder whereNotIn(string $column, $values, string $boolean = 'and')
     * @method static _EventTypeQueryBuilder whereNotNull(array|string $columns, string $boolean = 'and')
     * @method static _EventTypeQueryBuilder whereNull(array|string $columns, string $boolean = 'and', bool $not = false)
     * @method static _EventTypeQueryBuilder whereRaw(string $sql, $bindings = [], string $boolean = 'and')
     * @method static _EventTypeQueryBuilder whereRowValues(array $columns, string $operator, array $values, string $boolean = 'and')
     * @method static _EventTypeQueryBuilder whereTime(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _EventTypeQueryBuilder whereYear(string $column, string $operator, \DateTimeInterface|int|null|string $value = null, string $boolean = 'and')
     * @method static _EventTypeQueryBuilder with($relations)
     * @method static _EventTypeQueryBuilder withCasts(array $casts)
     * @method static _EventTypeQueryBuilder withCount($relations)
     * @method static _EventTypeQueryBuilder withGlobalScope(string $identifier, \Closure|Scope $scope)
     * @method static _EventTypeQueryBuilder without($relations)
     * @method static _EventTypeQueryBuilder withoutGlobalScope(Scope|string $scope)
     * @method static _EventTypeQueryBuilder withoutGlobalScopes(array $scopes = null)
     */
    class EventType extends Model
    {
    }

    /**
     * @property int $id
     * @property string $name
     * @property string $path
     * @property int $width
     * @property int $height
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _MapQueryBuilder newModelQuery()
     * @method static _MapQueryBuilder newQuery()
     * @method static _MapQueryBuilder query()
     * @method static _MapCollection|Map[] all()
     * @method static _MapQueryBuilder whereId($value)
     * @method static _MapQueryBuilder whereName($value)
     * @method static _MapQueryBuilder wherePath($value)
     * @method static _MapQueryBuilder whereWidth($value)
     * @method static _MapQueryBuilder whereHeight($value)
     * @method static _MapQueryBuilder whereCreatedAt($value)
     * @method static _MapQueryBuilder whereUpdatedAt($value)
     * @method static mixed aggregate(string $function, array $columns = ['*'])
     * @method static mixed avg(string $column)
     * @method static bool chunk(int $count, callable $callback)
     * @method static bool chunkById(int $count, callable $callback, null|string $column = null, null|string $alias = null)
     * @method static int count(string $columns = '*')
     * @method static Map create(array $attributes = [])
     * @method static _MapQueryBuilder crossJoin(string $table, \Closure|null|string $first = null, null|string $operator = null, null|string $second = null)
     * @method static _MapCollection|Map[] cursor()
     * @method static int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static bool doesntExist()
     * @method static bool doesntExistOr(\Closure $callback)
     * @method static _MapQueryBuilder each(callable $callback, int $count = 1000)
     * @method static bool eachById(callable $callback, int $count = 1000, null|string $column = null, null|string $alias = null)
     * @method static bool exists()
     * @method static bool existsOr(\Closure $callback)
     * @method static Map|null find($id, array $columns = ['*'])
     * @method static _MapCollection|Map[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method static Map findOrFail($id, array $columns = ['*'])
     * @method static _MapCollection|Map[] findOrNew($id, array $columns = ['*'])
     * @method static Map first(array|string $columns = ['*'])
     * @method static Map firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method static Map firstOrCreate(array $attributes, array $values = [])
     * @method static Map firstOrFail(array $columns = ['*'])
     * @method static Map firstOrNew(array $attributes = [], array $values = [])
     * @method static Map firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method static Map forceCreate(array $attributes)
     * @method static _MapCollection|Map[] fromQuery(string $query, array $bindings = [])
     * @method static _MapCollection|Map[] get(array|string $columns = ['*'])
     * @method static int getCountForPagination(array $columns = ['*'])
     * @method static Map getModel()
     * @method static Map[] getModels(array|string $columns = ['*'])
     * @method static _MapQueryBuilder getQuery()
     * @method static _MapQueryBuilder groupBy(array $groups)
     * @method static bool hasGlobalMacro(string $name)
     * @method static bool hasMacro(string $name)
     * @method static bool hasNamedScope(string $scope)
     * @method static _MapCollection|Map[] hydrate(array $items)
     * @method static int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method static bool insert(array $values)
     * @method static int insertGetId(array $values, null|string $sequence = null)
     * @method static int insertOrIgnore(array $values)
     * @method static int insertUsing(array $columns, \Closure|\Illuminate\Database\Query\Builder|string $query)
     * @method static _MapQueryBuilder join(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null, string $type = 'inner', bool $where = false)
     * @method static _MapQueryBuilder latest(string $column = null)
     * @method static _MapQueryBuilder leftJoin(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @method static _MapQueryBuilder limit(int $value)
     * @method static Map make(array $attributes = [])
     * @method static mixed max(string $column)
     * @method static mixed min(string $column)
     * @method static Map newModelInstance(array $attributes = [])
     * @method static int numericAggregate(string $function, array $columns = ['*'])
     * @method static _MapQueryBuilder offset(int $value)
     * @method static _MapQueryBuilder oldest(string $column = null)
     * @method static _MapQueryBuilder orderBy(\Closure|\Illuminate\Database\Query\Builder|Expression|string $column, string $direction = 'asc')
     * @method static _MapQueryBuilder orderByDesc(string $column)
     * @method static _MapQueryBuilder orderByRaw(string $sql, array $bindings = [])
     * @method static _MapQueryBuilder paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method static _MapQueryBuilder rightJoin(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @method static _MapQueryBuilder select(array $columns = ['*'])
     * @method static _MapQueryBuilder setQuery(\Illuminate\Database\Query\Builder $query)
     * @method static _MapQueryBuilder simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method static _MapQueryBuilder skip(int $value)
     * @method static mixed sum(string $column)
     * @method static _MapQueryBuilder take(int $value)
     * @method static _MapQueryBuilder tap(callable $callback)
     * @method static _MapQueryBuilder truncate()
     * @method static _MapQueryBuilder unless($value, callable $callback, callable|null $default = null)
     * @method static int update(array $values)
     * @method static Map updateOrCreate(array $attributes, array $values = [])
     * @method static bool updateOrInsert(array $attributes, array $values = [])
     * @method static _MapQueryBuilder when($value, callable $callback, callable|null $default = null)
     * @method static _MapQueryBuilder where(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method static _MapQueryBuilder whereBetween(string $column, array $values, string $boolean = 'and', bool $not = false)
     * @method static _MapQueryBuilder whereColumn(array|string $first, null|string $operator = null, null|string $second = null, null|string $boolean = 'and')
     * @method static _MapQueryBuilder whereDate(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _MapQueryBuilder whereDay(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _MapQueryBuilder whereDoesntHave(string $relation, \Closure $callback = null)
     * @method static _MapQueryBuilder whereDoesntHaveMorph(string $relation, array|string $types, \Closure $callback = null)
     * @method static _MapQueryBuilder whereExists(\Closure $callback, string $boolean = 'and', bool $not = false)
     * @method static _MapQueryBuilder whereHas(string $relation, \Closure $callback = null, string $operator = '>=', int $count = 1)
     * @method static _MapQueryBuilder whereHasMorph(string $relation, array|string $types, \Closure $callback = null, string $operator = '>=', int $count = 1)
     * @method static _MapQueryBuilder whereIn(string $column, $values, string $boolean = 'and', bool $not = false)
     * @method static _MapQueryBuilder whereIntegerInRaw(string $column, array|Arrayable $values, string $boolean = 'and', bool $not = false)
     * @method static _MapQueryBuilder whereIntegerNotInRaw(string $column, array|Arrayable $values, string $boolean = 'and')
     * @method static _MapQueryBuilder whereJsonContains(string $column, $value, string $boolean = 'and', bool $not = false)
     * @method static _MapQueryBuilder whereJsonDoesntContain(string $column, $value, string $boolean = 'and')
     * @method static _MapQueryBuilder whereJsonLength(string $column, $operator, $value = null, string $boolean = 'and')
     * @method static _MapQueryBuilder whereKey($id)
     * @method static _MapQueryBuilder whereKeyNot($id)
     * @method static _MapQueryBuilder whereMonth(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _MapQueryBuilder whereNested(\Closure $callback, string $boolean = 'and')
     * @method static _MapQueryBuilder whereNotBetween(string $column, array $values, string $boolean = 'and')
     * @method static _MapQueryBuilder whereNotExists(\Closure $callback, string $boolean = 'and')
     * @method static _MapQueryBuilder whereNotIn(string $column, $values, string $boolean = 'and')
     * @method static _MapQueryBuilder whereNotNull(array|string $columns, string $boolean = 'and')
     * @method static _MapQueryBuilder whereNull(array|string $columns, string $boolean = 'and', bool $not = false)
     * @method static _MapQueryBuilder whereRaw(string $sql, $bindings = [], string $boolean = 'and')
     * @method static _MapQueryBuilder whereRowValues(array $columns, string $operator, array $values, string $boolean = 'and')
     * @method static _MapQueryBuilder whereTime(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _MapQueryBuilder whereYear(string $column, string $operator, \DateTimeInterface|int|null|string $value = null, string $boolean = 'and')
     * @method static _MapQueryBuilder with($relations)
     * @method static _MapQueryBuilder withCasts(array $casts)
     * @method static _MapQueryBuilder withCount($relations)
     * @method static _MapQueryBuilder withGlobalScope(string $identifier, \Closure|Scope $scope)
     * @method static _MapQueryBuilder without($relations)
     * @method static _MapQueryBuilder withoutGlobalScope(Scope|string $scope)
     * @method static _MapQueryBuilder withoutGlobalScopes(array $scopes = null)
     */
    class Map extends Model
    {
    }

    /**
     * @property int $id
     * @property string $name
     * @property string $description
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _StatusQueryBuilder newModelQuery()
     * @method static _StatusQueryBuilder newQuery()
     * @method static _StatusQueryBuilder query()
     * @method static _StatusCollection|Status[] all()
     * @method static _StatusQueryBuilder whereId($value)
     * @method static _StatusQueryBuilder whereName($value)
     * @method static _StatusQueryBuilder whereDescription($value)
     * @method static _StatusQueryBuilder whereCreatedAt($value)
     * @method static _StatusQueryBuilder whereUpdatedAt($value)
     * @method static mixed aggregate(string $function, array $columns = ['*'])
     * @method static mixed avg(string $column)
     * @method static bool chunk(int $count, callable $callback)
     * @method static bool chunkById(int $count, callable $callback, null|string $column = null, null|string $alias = null)
     * @method static int count(string $columns = '*')
     * @method static Status create(array $attributes = [])
     * @method static _StatusQueryBuilder crossJoin(string $table, \Closure|null|string $first = null, null|string $operator = null, null|string $second = null)
     * @method static _StatusCollection|Status[] cursor()
     * @method static int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static bool doesntExist()
     * @method static bool doesntExistOr(\Closure $callback)
     * @method static _StatusQueryBuilder each(callable $callback, int $count = 1000)
     * @method static bool eachById(callable $callback, int $count = 1000, null|string $column = null, null|string $alias = null)
     * @method static bool exists()
     * @method static bool existsOr(\Closure $callback)
     * @method static Status|null find($id, array $columns = ['*'])
     * @method static _StatusCollection|Status[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method static Status findOrFail($id, array $columns = ['*'])
     * @method static _StatusCollection|Status[] findOrNew($id, array $columns = ['*'])
     * @method static Status first(array|string $columns = ['*'])
     * @method static Status firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method static Status firstOrCreate(array $attributes, array $values = [])
     * @method static Status firstOrFail(array $columns = ['*'])
     * @method static Status firstOrNew(array $attributes = [], array $values = [])
     * @method static Status firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method static Status forceCreate(array $attributes)
     * @method static _StatusCollection|Status[] fromQuery(string $query, array $bindings = [])
     * @method static _StatusCollection|Status[] get(array|string $columns = ['*'])
     * @method static int getCountForPagination(array $columns = ['*'])
     * @method static Status getModel()
     * @method static Status[] getModels(array|string $columns = ['*'])
     * @method static _StatusQueryBuilder getQuery()
     * @method static _StatusQueryBuilder groupBy(array $groups)
     * @method static bool hasGlobalMacro(string $name)
     * @method static bool hasMacro(string $name)
     * @method static bool hasNamedScope(string $scope)
     * @method static _StatusCollection|Status[] hydrate(array $items)
     * @method static int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method static bool insert(array $values)
     * @method static int insertGetId(array $values, null|string $sequence = null)
     * @method static int insertOrIgnore(array $values)
     * @method static int insertUsing(array $columns, \Closure|\Illuminate\Database\Query\Builder|string $query)
     * @method static _StatusQueryBuilder join(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null, string $type = 'inner', bool $where = false)
     * @method static _StatusQueryBuilder latest(string $column = null)
     * @method static _StatusQueryBuilder leftJoin(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @method static _StatusQueryBuilder limit(int $value)
     * @method static Status make(array $attributes = [])
     * @method static mixed max(string $column)
     * @method static mixed min(string $column)
     * @method static Status newModelInstance(array $attributes = [])
     * @method static int numericAggregate(string $function, array $columns = ['*'])
     * @method static _StatusQueryBuilder offset(int $value)
     * @method static _StatusQueryBuilder oldest(string $column = null)
     * @method static _StatusQueryBuilder orderBy(\Closure|\Illuminate\Database\Query\Builder|Expression|string $column, string $direction = 'asc')
     * @method static _StatusQueryBuilder orderByDesc(string $column)
     * @method static _StatusQueryBuilder orderByRaw(string $sql, array $bindings = [])
     * @method static _StatusQueryBuilder paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method static _StatusQueryBuilder rightJoin(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @method static _StatusQueryBuilder select(array $columns = ['*'])
     * @method static _StatusQueryBuilder setQuery(\Illuminate\Database\Query\Builder $query)
     * @method static _StatusQueryBuilder simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method static _StatusQueryBuilder skip(int $value)
     * @method static mixed sum(string $column)
     * @method static _StatusQueryBuilder take(int $value)
     * @method static _StatusQueryBuilder tap(callable $callback)
     * @method static _StatusQueryBuilder truncate()
     * @method static _StatusQueryBuilder unless($value, callable $callback, callable|null $default = null)
     * @method static int update(array $values)
     * @method static Status updateOrCreate(array $attributes, array $values = [])
     * @method static bool updateOrInsert(array $attributes, array $values = [])
     * @method static _StatusQueryBuilder when($value, callable $callback, callable|null $default = null)
     * @method static _StatusQueryBuilder where(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method static _StatusQueryBuilder whereBetween(string $column, array $values, string $boolean = 'and', bool $not = false)
     * @method static _StatusQueryBuilder whereColumn(array|string $first, null|string $operator = null, null|string $second = null, null|string $boolean = 'and')
     * @method static _StatusQueryBuilder whereDate(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _StatusQueryBuilder whereDay(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _StatusQueryBuilder whereDoesntHave(string $relation, \Closure $callback = null)
     * @method static _StatusQueryBuilder whereDoesntHaveMorph(string $relation, array|string $types, \Closure $callback = null)
     * @method static _StatusQueryBuilder whereExists(\Closure $callback, string $boolean = 'and', bool $not = false)
     * @method static _StatusQueryBuilder whereHas(string $relation, \Closure $callback = null, string $operator = '>=', int $count = 1)
     * @method static _StatusQueryBuilder whereHasMorph(string $relation, array|string $types, \Closure $callback = null, string $operator = '>=', int $count = 1)
     * @method static _StatusQueryBuilder whereIn(string $column, $values, string $boolean = 'and', bool $not = false)
     * @method static _StatusQueryBuilder whereIntegerInRaw(string $column, array|Arrayable $values, string $boolean = 'and', bool $not = false)
     * @method static _StatusQueryBuilder whereIntegerNotInRaw(string $column, array|Arrayable $values, string $boolean = 'and')
     * @method static _StatusQueryBuilder whereJsonContains(string $column, $value, string $boolean = 'and', bool $not = false)
     * @method static _StatusQueryBuilder whereJsonDoesntContain(string $column, $value, string $boolean = 'and')
     * @method static _StatusQueryBuilder whereJsonLength(string $column, $operator, $value = null, string $boolean = 'and')
     * @method static _StatusQueryBuilder whereKey($id)
     * @method static _StatusQueryBuilder whereKeyNot($id)
     * @method static _StatusQueryBuilder whereMonth(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _StatusQueryBuilder whereNested(\Closure $callback, string $boolean = 'and')
     * @method static _StatusQueryBuilder whereNotBetween(string $column, array $values, string $boolean = 'and')
     * @method static _StatusQueryBuilder whereNotExists(\Closure $callback, string $boolean = 'and')
     * @method static _StatusQueryBuilder whereNotIn(string $column, $values, string $boolean = 'and')
     * @method static _StatusQueryBuilder whereNotNull(array|string $columns, string $boolean = 'and')
     * @method static _StatusQueryBuilder whereNull(array|string $columns, string $boolean = 'and', bool $not = false)
     * @method static _StatusQueryBuilder whereRaw(string $sql, $bindings = [], string $boolean = 'and')
     * @method static _StatusQueryBuilder whereRowValues(array $columns, string $operator, array $values, string $boolean = 'and')
     * @method static _StatusQueryBuilder whereTime(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _StatusQueryBuilder whereYear(string $column, string $operator, \DateTimeInterface|int|null|string $value = null, string $boolean = 'and')
     * @method static _StatusQueryBuilder with($relations)
     * @method static _StatusQueryBuilder withCasts(array $casts)
     * @method static _StatusQueryBuilder withCount($relations)
     * @method static _StatusQueryBuilder withGlobalScope(string $identifier, \Closure|Scope $scope)
     * @method static _StatusQueryBuilder without($relations)
     * @method static _StatusQueryBuilder withoutGlobalScope(Scope|string $scope)
     * @method static _StatusQueryBuilder withoutGlobalScopes(array $scopes = null)
     */
    class Status extends Model
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
     * @method static _UserQueryBuilder newModelQuery()
     * @method static _UserQueryBuilder newQuery()
     * @method static _UserQueryBuilder query()
     * @method static _UserCollection|User[] all()
     * @method static _UserQueryBuilder whereId($value)
     * @method static _UserQueryBuilder whereName($value)
     * @method static _UserQueryBuilder whereEmail($value)
     * @method static _UserQueryBuilder whereEmailVerifiedAt($value)
     * @method static _UserQueryBuilder wherePassword($value)
     * @method static _UserQueryBuilder whereRememberToken($value)
     * @method static _UserQueryBuilder whereCreatedAt($value)
     * @method static _UserQueryBuilder whereUpdatedAt($value)
     * @method static mixed aggregate(string $function, array $columns = ['*'])
     * @method static mixed avg(string $column)
     * @method static bool chunk(int $count, callable $callback)
     * @method static bool chunkById(int $count, callable $callback, null|string $column = null, null|string $alias = null)
     * @method static int count(string $columns = '*')
     * @method static User create(array $attributes = [])
     * @method static _UserQueryBuilder crossJoin(string $table, \Closure|null|string $first = null, null|string $operator = null, null|string $second = null)
     * @method static _UserCollection|User[] cursor()
     * @method static int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static bool doesntExist()
     * @method static bool doesntExistOr(\Closure $callback)
     * @method static _UserQueryBuilder each(callable $callback, int $count = 1000)
     * @method static bool eachById(callable $callback, int $count = 1000, null|string $column = null, null|string $alias = null)
     * @method static bool exists()
     * @method static bool existsOr(\Closure $callback)
     * @method static User|null find($id, array $columns = ['*'])
     * @method static _UserCollection|User[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method static User findOrFail($id, array $columns = ['*'])
     * @method static _UserCollection|User[] findOrNew($id, array $columns = ['*'])
     * @method static User first(array|string $columns = ['*'])
     * @method static User firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method static User firstOrCreate(array $attributes, array $values = [])
     * @method static User firstOrFail(array $columns = ['*'])
     * @method static User firstOrNew(array $attributes = [], array $values = [])
     * @method static User firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method static User forceCreate(array $attributes)
     * @method static _UserCollection|User[] fromQuery(string $query, array $bindings = [])
     * @method static _UserCollection|User[] get(array|string $columns = ['*'])
     * @method static int getCountForPagination(array $columns = ['*'])
     * @method static User getModel()
     * @method static User[] getModels(array|string $columns = ['*'])
     * @method static _UserQueryBuilder getQuery()
     * @method static _UserQueryBuilder groupBy(array $groups)
     * @method static bool hasGlobalMacro(string $name)
     * @method static bool hasMacro(string $name)
     * @method static bool hasNamedScope(string $scope)
     * @method static _UserCollection|User[] hydrate(array $items)
     * @method static int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method static bool insert(array $values)
     * @method static int insertGetId(array $values, null|string $sequence = null)
     * @method static int insertOrIgnore(array $values)
     * @method static int insertUsing(array $columns, \Closure|\Illuminate\Database\Query\Builder|string $query)
     * @method static _UserQueryBuilder join(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null, string $type = 'inner', bool $where = false)
     * @method static _UserQueryBuilder latest(string $column = null)
     * @method static _UserQueryBuilder leftJoin(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @method static _UserQueryBuilder limit(int $value)
     * @method static User make(array $attributes = [])
     * @method static mixed max(string $column)
     * @method static mixed min(string $column)
     * @method static User newModelInstance(array $attributes = [])
     * @method static int numericAggregate(string $function, array $columns = ['*'])
     * @method static _UserQueryBuilder offset(int $value)
     * @method static _UserQueryBuilder oldest(string $column = null)
     * @method static _UserQueryBuilder orderBy(\Closure|\Illuminate\Database\Query\Builder|Expression|string $column, string $direction = 'asc')
     * @method static _UserQueryBuilder orderByDesc(string $column)
     * @method static _UserQueryBuilder orderByRaw(string $sql, array $bindings = [])
     * @method static _UserQueryBuilder paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method static _UserQueryBuilder rightJoin(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @method static _UserQueryBuilder select(array $columns = ['*'])
     * @method static _UserQueryBuilder setQuery(\Illuminate\Database\Query\Builder $query)
     * @method static _UserQueryBuilder simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method static _UserQueryBuilder skip(int $value)
     * @method static mixed sum(string $column)
     * @method static _UserQueryBuilder take(int $value)
     * @method static _UserQueryBuilder tap(callable $callback)
     * @method static _UserQueryBuilder truncate()
     * @method static _UserQueryBuilder unless($value, callable $callback, callable|null $default = null)
     * @method static int update(array $values)
     * @method static User updateOrCreate(array $attributes, array $values = [])
     * @method static bool updateOrInsert(array $attributes, array $values = [])
     * @method static _UserQueryBuilder when($value, callable $callback, callable|null $default = null)
     * @method static _UserQueryBuilder where(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method static _UserQueryBuilder whereBetween(string $column, array $values, string $boolean = 'and', bool $not = false)
     * @method static _UserQueryBuilder whereColumn(array|string $first, null|string $operator = null, null|string $second = null, null|string $boolean = 'and')
     * @method static _UserQueryBuilder whereDate(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _UserQueryBuilder whereDay(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _UserQueryBuilder whereDoesntHave(string $relation, \Closure $callback = null)
     * @method static _UserQueryBuilder whereDoesntHaveMorph(string $relation, array|string $types, \Closure $callback = null)
     * @method static _UserQueryBuilder whereExists(\Closure $callback, string $boolean = 'and', bool $not = false)
     * @method static _UserQueryBuilder whereHas(string $relation, \Closure $callback = null, string $operator = '>=', int $count = 1)
     * @method static _UserQueryBuilder whereHasMorph(string $relation, array|string $types, \Closure $callback = null, string $operator = '>=', int $count = 1)
     * @method static _UserQueryBuilder whereIn(string $column, $values, string $boolean = 'and', bool $not = false)
     * @method static _UserQueryBuilder whereIntegerInRaw(string $column, array|Arrayable $values, string $boolean = 'and', bool $not = false)
     * @method static _UserQueryBuilder whereIntegerNotInRaw(string $column, array|Arrayable $values, string $boolean = 'and')
     * @method static _UserQueryBuilder whereJsonContains(string $column, $value, string $boolean = 'and', bool $not = false)
     * @method static _UserQueryBuilder whereJsonDoesntContain(string $column, $value, string $boolean = 'and')
     * @method static _UserQueryBuilder whereJsonLength(string $column, $operator, $value = null, string $boolean = 'and')
     * @method static _UserQueryBuilder whereKey($id)
     * @method static _UserQueryBuilder whereKeyNot($id)
     * @method static _UserQueryBuilder whereMonth(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _UserQueryBuilder whereNested(\Closure $callback, string $boolean = 'and')
     * @method static _UserQueryBuilder whereNotBetween(string $column, array $values, string $boolean = 'and')
     * @method static _UserQueryBuilder whereNotExists(\Closure $callback, string $boolean = 'and')
     * @method static _UserQueryBuilder whereNotIn(string $column, $values, string $boolean = 'and')
     * @method static _UserQueryBuilder whereNotNull(array|string $columns, string $boolean = 'and')
     * @method static _UserQueryBuilder whereNull(array|string $columns, string $boolean = 'and', bool $not = false)
     * @method static _UserQueryBuilder whereRaw(string $sql, $bindings = [], string $boolean = 'and')
     * @method static _UserQueryBuilder whereRowValues(array $columns, string $operator, array $values, string $boolean = 'and')
     * @method static _UserQueryBuilder whereTime(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _UserQueryBuilder whereYear(string $column, string $operator, \DateTimeInterface|int|null|string $value = null, string $boolean = 'and')
     * @method static _UserQueryBuilder with($relations)
     * @method static _UserQueryBuilder withCasts(array $casts)
     * @method static _UserQueryBuilder withCount($relations)
     * @method static _UserQueryBuilder withGlobalScope(string $identifier, \Closure|Scope $scope)
     * @method static _UserQueryBuilder without($relations)
     * @method static _UserQueryBuilder withoutGlobalScope(Scope|string $scope)
     * @method static _UserQueryBuilder withoutGlobalScopes(array $scopes = null)
     */
    class User extends Model
    {
    }
}

namespace Illuminate\Notifications {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Database\Eloquent\Scope;
    use Illuminate\Database\Query\Expression;
    use LaravelIdea\Helper\Illuminate\Notifications\_DatabaseNotificationCollection;
    use LaravelIdea\Helper\Illuminate\Notifications\_DatabaseNotificationQueryBuilder;

    /**
     * @property Model $notifiable
     * @method MorphTo notifiable()
     * @method static _DatabaseNotificationQueryBuilder newModelQuery()
     * @method static _DatabaseNotificationQueryBuilder newQuery()
     * @method static _DatabaseNotificationQueryBuilder query()
     * @method static _DatabaseNotificationCollection|DatabaseNotification[] all()
     * @method static mixed aggregate(string $function, array $columns = ['*'])
     * @method static mixed avg(string $column)
     * @method static bool chunk(int $count, callable $callback)
     * @method static bool chunkById(int $count, callable $callback, null|string $column = null, null|string $alias = null)
     * @method static int count(string $columns = '*')
     * @method static DatabaseNotification create(array $attributes = [])
     * @method static _DatabaseNotificationQueryBuilder crossJoin(string $table, \Closure|null|string $first = null, null|string $operator = null, null|string $second = null)
     * @method static _DatabaseNotificationCollection|DatabaseNotification[] cursor()
     * @method static int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static bool doesntExist()
     * @method static bool doesntExistOr(\Closure $callback)
     * @method static _DatabaseNotificationQueryBuilder each(callable $callback, int $count = 1000)
     * @method static bool eachById(callable $callback, int $count = 1000, null|string $column = null, null|string $alias = null)
     * @method static bool exists()
     * @method static bool existsOr(\Closure $callback)
     * @method static DatabaseNotification|null find($id, array $columns = ['*'])
     * @method static _DatabaseNotificationCollection|DatabaseNotification[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method static DatabaseNotification findOrFail($id, array $columns = ['*'])
     * @method static _DatabaseNotificationCollection|DatabaseNotification[] findOrNew($id, array $columns = ['*'])
     * @method static DatabaseNotification first(array|string $columns = ['*'])
     * @method static DatabaseNotification firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method static DatabaseNotification firstOrCreate(array $attributes, array $values = [])
     * @method static DatabaseNotification firstOrFail(array $columns = ['*'])
     * @method static DatabaseNotification firstOrNew(array $attributes = [], array $values = [])
     * @method static DatabaseNotification firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method static DatabaseNotification forceCreate(array $attributes)
     * @method static _DatabaseNotificationCollection|DatabaseNotification[] fromQuery(string $query, array $bindings = [])
     * @method static _DatabaseNotificationCollection|DatabaseNotification[] get(array|string $columns = ['*'])
     * @method static int getCountForPagination(array $columns = ['*'])
     * @method static DatabaseNotification getModel()
     * @method static DatabaseNotification[] getModels(array|string $columns = ['*'])
     * @method static _DatabaseNotificationQueryBuilder getQuery()
     * @method static _DatabaseNotificationQueryBuilder groupBy(array $groups)
     * @method static bool hasGlobalMacro(string $name)
     * @method static bool hasMacro(string $name)
     * @method static bool hasNamedScope(string $scope)
     * @method static _DatabaseNotificationCollection|DatabaseNotification[] hydrate(array $items)
     * @method static int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method static bool insert(array $values)
     * @method static int insertGetId(array $values, null|string $sequence = null)
     * @method static int insertOrIgnore(array $values)
     * @method static int insertUsing(array $columns, \Closure|\Illuminate\Database\Query\Builder|string $query)
     * @method static _DatabaseNotificationQueryBuilder join(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null, string $type = 'inner', bool $where = false)
     * @method static _DatabaseNotificationQueryBuilder latest(string $column = null)
     * @method static _DatabaseNotificationQueryBuilder leftJoin(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @method static _DatabaseNotificationQueryBuilder limit(int $value)
     * @method static DatabaseNotification make(array $attributes = [])
     * @method static mixed max(string $column)
     * @method static mixed min(string $column)
     * @method static DatabaseNotification newModelInstance(array $attributes = [])
     * @method static int numericAggregate(string $function, array $columns = ['*'])
     * @method static _DatabaseNotificationQueryBuilder offset(int $value)
     * @method static _DatabaseNotificationQueryBuilder oldest(string $column = null)
     * @method static _DatabaseNotificationQueryBuilder orderBy(\Closure|\Illuminate\Database\Query\Builder|Expression|string $column, string $direction = 'asc')
     * @method static _DatabaseNotificationQueryBuilder orderByDesc(string $column)
     * @method static _DatabaseNotificationQueryBuilder orderByRaw(string $sql, array $bindings = [])
     * @method static _DatabaseNotificationQueryBuilder paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method static _DatabaseNotificationQueryBuilder rightJoin(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @method static _DatabaseNotificationQueryBuilder select(array $columns = ['*'])
     * @method static _DatabaseNotificationQueryBuilder setQuery(\Illuminate\Database\Query\Builder $query)
     * @method static _DatabaseNotificationQueryBuilder simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method static _DatabaseNotificationQueryBuilder skip(int $value)
     * @method static mixed sum(string $column)
     * @method static _DatabaseNotificationQueryBuilder take(int $value)
     * @method static _DatabaseNotificationQueryBuilder tap(callable $callback)
     * @method static _DatabaseNotificationQueryBuilder truncate()
     * @method static _DatabaseNotificationQueryBuilder unless($value, callable $callback, callable|null $default = null)
     * @method static int update(array $values)
     * @method static DatabaseNotification updateOrCreate(array $attributes, array $values = [])
     * @method static bool updateOrInsert(array $attributes, array $values = [])
     * @method static _DatabaseNotificationQueryBuilder when($value, callable $callback, callable|null $default = null)
     * @method static _DatabaseNotificationQueryBuilder where(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method static _DatabaseNotificationQueryBuilder whereBetween(string $column, array $values, string $boolean = 'and', bool $not = false)
     * @method static _DatabaseNotificationQueryBuilder whereColumn(array|string $first, null|string $operator = null, null|string $second = null, null|string $boolean = 'and')
     * @method static _DatabaseNotificationQueryBuilder whereDate(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _DatabaseNotificationQueryBuilder whereDay(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _DatabaseNotificationQueryBuilder whereDoesntHave(string $relation, \Closure $callback = null)
     * @method static _DatabaseNotificationQueryBuilder whereDoesntHaveMorph(string $relation, array|string $types, \Closure $callback = null)
     * @method static _DatabaseNotificationQueryBuilder whereExists(\Closure $callback, string $boolean = 'and', bool $not = false)
     * @method static _DatabaseNotificationQueryBuilder whereHas(string $relation, \Closure $callback = null, string $operator = '>=', int $count = 1)
     * @method static _DatabaseNotificationQueryBuilder whereHasMorph(string $relation, array|string $types, \Closure $callback = null, string $operator = '>=', int $count = 1)
     * @method static _DatabaseNotificationQueryBuilder whereIn(string $column, $values, string $boolean = 'and', bool $not = false)
     * @method static _DatabaseNotificationQueryBuilder whereIntegerInRaw(string $column, array|Arrayable $values, string $boolean = 'and', bool $not = false)
     * @method static _DatabaseNotificationQueryBuilder whereIntegerNotInRaw(string $column, array|Arrayable $values, string $boolean = 'and')
     * @method static _DatabaseNotificationQueryBuilder whereJsonContains(string $column, $value, string $boolean = 'and', bool $not = false)
     * @method static _DatabaseNotificationQueryBuilder whereJsonDoesntContain(string $column, $value, string $boolean = 'and')
     * @method static _DatabaseNotificationQueryBuilder whereJsonLength(string $column, $operator, $value = null, string $boolean = 'and')
     * @method static _DatabaseNotificationQueryBuilder whereKey($id)
     * @method static _DatabaseNotificationQueryBuilder whereKeyNot($id)
     * @method static _DatabaseNotificationQueryBuilder whereMonth(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _DatabaseNotificationQueryBuilder whereNested(\Closure $callback, string $boolean = 'and')
     * @method static _DatabaseNotificationQueryBuilder whereNotBetween(string $column, array $values, string $boolean = 'and')
     * @method static _DatabaseNotificationQueryBuilder whereNotExists(\Closure $callback, string $boolean = 'and')
     * @method static _DatabaseNotificationQueryBuilder whereNotIn(string $column, $values, string $boolean = 'and')
     * @method static _DatabaseNotificationQueryBuilder whereNotNull(array|string $columns, string $boolean = 'and')
     * @method static _DatabaseNotificationQueryBuilder whereNull(array|string $columns, string $boolean = 'and', bool $not = false)
     * @method static _DatabaseNotificationQueryBuilder whereRaw(string $sql, $bindings = [], string $boolean = 'and')
     * @method static _DatabaseNotificationQueryBuilder whereRowValues(array $columns, string $operator, array $values, string $boolean = 'and')
     * @method static _DatabaseNotificationQueryBuilder whereTime(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @method static _DatabaseNotificationQueryBuilder whereYear(string $column, string $operator, \DateTimeInterface|int|null|string $value = null, string $boolean = 'and')
     * @method static _DatabaseNotificationQueryBuilder with($relations)
     * @method static _DatabaseNotificationQueryBuilder withCasts(array $casts)
     * @method static _DatabaseNotificationQueryBuilder withCount($relations)
     * @method static _DatabaseNotificationQueryBuilder withGlobalScope(string $identifier, \Closure|Scope $scope)
     * @method static _DatabaseNotificationQueryBuilder without($relations)
     * @method static _DatabaseNotificationQueryBuilder withoutGlobalScope(Scope|string $scope)
     * @method static _DatabaseNotificationQueryBuilder withoutGlobalScopes(array $scopes = null)
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
     * @see \Illuminate\Database\Query\Builder::orWhereExists
     * @method $this orWhereExists(\Closure $callback, bool $not = false)
     * @see \Illuminate\Database\Query\Builder::whereJsonLength
     * @method $this whereJsonLength(string $column, $operator, $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::orWhereNotIn
     * @method $this orWhereNotIn(string $column, $values)
     * @see \Illuminate\Database\Query\Builder::selectRaw
     * @method $this selectRaw(string $expression, array $bindings = [])
     * @see \Illuminate\Database\Query\Builder::truncate
     * @method $this truncate()
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
     * @see \Illuminate\Database\Query\Builder::raw
     * @method $this raw($value)
     * @see \Illuminate\Database\Query\Builder::orderBy
     * @method $this orderBy(\Closure|\Illuminate\Database\Query\Builder|Expression|string $column, string $direction = 'asc')
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
     * @see \Illuminate\Database\Query\Builder::orWhereIntegerInRaw
     * @method $this orWhereIntegerInRaw(string $column, array|Arrayable $values)
     * @see \Illuminate\Database\Query\Builder::orWhereNotExists
     * @method $this orWhereNotExists(\Closure $callback)
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
     * @see \Illuminate\Database\Query\Builder::orWhereNotNull
     * @method $this orWhereNotNull(string $column)
     * @see \Illuminate\Database\Query\Builder::average
     * @method $this average(string $column)
     * @see \Illuminate\Database\Query\Builder::existsOr
     * @method $this existsOr(\Closure $callback)
     * @see \Illuminate\Database\Query\Builder::getProcessor
     * @method $this getProcessor()
     * @see \Illuminate\Database\Query\Builder::increment
     * @method $this increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Query\Builder::sum
     * @method $this sum(string $column)
     * @see \Illuminate\Database\Query\Builder::skip
     * @method $this skip(int $value)
     * @see \Illuminate\Database\Query\Builder::havingRaw
     * @method $this havingRaw(string $sql, array $bindings = [], string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::leftJoinWhere
     * @method $this leftJoinWhere(string $table, \Closure|string $first, string $operator, string $second)
     * @see \Illuminate\Database\Query\Builder::doesntExistOr
     * @method $this doesntExistOr(\Closure $callback)
     * @see \Illuminate\Database\Query\Builder::orWhereColumn
     * @method $this orWhereColumn(array|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::getRawBindings
     * @method $this getRawBindings()
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
     * @see \Illuminate\Database\Query\Builder::max
     * @method $this max(string $column)
     * @see \Illuminate\Database\Query\Builder::rightJoinWhere
     * @method $this rightJoinWhere(string $table, \Closure|string $first, string $operator, string $second)
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
     * @see \Illuminate\Database\Query\Builder::selectSub
     * @method $this selectSub(\Closure|\Illuminate\Database\Query\Builder|string $query, string $as)
     * @see \Illuminate\Database\Query\Builder::pluck
     * @method $this pluck(string $column, null|string $key = null)
     * @see \Illuminate\Database\Concerns\BuildsQueries::first
     * @method $this first(array|string $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::dd
     * @method $this dd()
     * @see \Illuminate\Database\Query\Builder::whereColumn
     * @method $this whereColumn(array|string $first, null|string $operator = null, null|string $second = null, null|string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::prepareValueAndOperator
     * @method $this prepareValueAndOperator(string $value, string $operator, bool $useDefault = false)
     * @see \Illuminate\Database\Query\Builder::whereNull
     * @method $this whereNull(array|string $columns, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::numericAggregate
     * @method $this numericAggregate(string $function, array $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::whereNotBetween
     * @method $this whereNotBetween(string $column, array $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::getConnection
     * @method $this getConnection()
     * @see \Illuminate\Database\Query\Builder::mergeBindings
     * @method $this mergeBindings(\Illuminate\Database\Query\Builder $query)
     * @see \Illuminate\Database\Query\Builder::whereIntegerNotInRaw
     * @method $this whereIntegerNotInRaw(string $column, array|Arrayable $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::orWhereRaw
     * @method $this orWhereRaw(string $sql, $bindings = [])
     * @see \Illuminate\Database\Query\Builder::orWhereJsonDoesntContain
     * @method $this orWhereJsonDoesntContain(string $column, $value)
     * @see \Illuminate\Database\Query\Builder::leftJoinSub
     * @method $this leftJoinSub(\Closure|\Illuminate\Database\Query\Builder|string $query, string $as, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::find
     * @method $this find(int|string $id, array $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::whereJsonContains
     * @method $this whereJsonContains(string $column, $value, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::limit
     * @method $this limit(int $value)
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
     * @see \Illuminate\Database\Query\Builder::doesntExist
     * @method $this doesntExist()
     * @see \Illuminate\Database\Query\Builder::simplePaginate
     * @method $this simplePaginate(int $perPage = 15, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
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
     * @see \Illuminate\Database\Query\Builder::fromSub
     * @method $this fromSub(\Closure|\Illuminate\Database\Query\Builder|string $query, string $as)
     * @see \Illuminate\Database\Query\Builder::rightJoin
     * @method $this rightJoin(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::leftJoin
     * @method $this leftJoin(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::update
     * @method $this update(array $values)
     * @see \Illuminate\Database\Query\Builder::insert
     * @method $this insert(array $values)
     * @see \Illuminate\Database\Query\Builder::distinct
     * @method $this distinct()
     * @see \Illuminate\Database\Concerns\BuildsQueries::chunk
     * @method $this chunk(int $count, callable $callback)
     * @see \Illuminate\Database\Query\Builder::reorder
     * @method $this reorder($column = null, $direction = 'asc')
     * @see \Illuminate\Database\Query\Builder::whereYear
     * @method $this whereYear(string $column, string $operator, \DateTimeInterface|int|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::getCountForPagination
     * @method $this getCountForPagination(array $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::delete
     * @method $this delete($id = null)
     * @see \Illuminate\Database\Query\Builder::orWhereIntegerNotInRaw
     * @method $this orWhereIntegerNotInRaw(string $column, array|Arrayable $values)
     * @see \Illuminate\Database\Query\Builder::groupByRaw
     * @method $this groupByRaw(string $sql, array $bindings = [])
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
     * @see \Illuminate\Database\Query\Builder::implode
     * @method $this implode(string $column, string $glue = '')
     * @see \Illuminate\Database\Query\Builder::dump
     * @method $this dump()
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
     * @see \Illuminate\Database\Query\Builder::orWhere
     * @method $this orWhere(array|\Closure|string $column, $operator = null, $value = null)
     * @see \Illuminate\Database\Query\Builder::dynamicWhere
     * @method $this dynamicWhere(string $method, array $parameters)
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

    use App\Badge;
    use App\Device;
    use App\Employee;
    use App\Event;
    use App\EventType;
    use App\Map;
    use App\Status;
    use App\User;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Notifications\Notification;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method Badge shift()
     * @method Badge pop()
     * @method Badge get($key, $default = null)
     * @method Badge pull($key, $default = null)
     * @method Badge first(callable $callback = null, $default = null)
     * @method Badge firstWhere(string $key, $operator = null, $value = null)
     * @method Badge[] all()
     * @method Badge last(callable $callback = null, $default = null)
     * @property-read _BadgeCollectionProxy $keyBy
     * @property-read _BadgeCollectionProxy $max
     * @property-read _BadgeCollectionProxy $partition
     * @property-read _BadgeCollectionProxy $average
     * @property-read _BadgeCollectionProxy $flatMap
     * @property-read _BadgeCollectionProxy $each
     * @property-read _BadgeCollectionProxy $some
     * @property-read _BadgeCollectionProxy $map
     * @property-read _BadgeCollectionProxy $sortByDesc
     * @property-read _BadgeCollectionProxy $filter
     * @property-read _BadgeCollectionProxy $avg
     * @property-read _BadgeCollectionProxy $unique
     * @property-read _BadgeCollectionProxy $first
     * @property-read _BadgeCollectionProxy $min
     * @property-read _BadgeCollectionProxy $groupBy
     * @property-read _BadgeCollectionProxy $reject
     * @property-read _BadgeCollectionProxy $sortBy
     * @property-read _BadgeCollectionProxy $contains
     * @property-read _BadgeCollectionProxy $sum
     * @property-read _BadgeCollectionProxy $until
     * @property-read _BadgeCollectionProxy $every
     */
    class _BadgeCollection extends _BaseCollection
    {
        /**
         * @param int $size
         * @return Badge[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _BadgeCollection|mixed $id
     * @property _BadgeCollection|mixed $code
     * @property _BadgeCollection|mixed $status
     * @property _BadgeCollection|mixed $employee_id
     * @property _BadgeCollection|mixed $created_at
     * @property _BadgeCollection|mixed $updated_at
     * @see \App\Badge::employee
     * @method _BadgeCollection employee()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _BadgeCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _BadgeCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _BadgeCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _BadgeCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _BadgeCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _BadgeCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _BadgeCollection delete()
     */
    class _BadgeCollectionProxy
    {
    }

    /**
     * @method _BadgeQueryBuilder whereId($value)
     * @method _BadgeQueryBuilder whereCode($value)
     * @method _BadgeQueryBuilder whereStatus($value)
     * @method _BadgeQueryBuilder whereEmployeeId($value)
     * @method _BadgeQueryBuilder whereCreatedAt($value)
     * @method _BadgeQueryBuilder whereUpdatedAt($value)
     * @method Badge create(array $attributes = [])
     * @method _BadgeCollection|Badge[] cursor()
     * @method Badge|null find($id, array $columns = ['*'])
     * @method _BadgeCollection|Badge[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Badge findOrFail($id, array $columns = ['*'])
     * @method _BadgeCollection|Badge[] findOrNew($id, array $columns = ['*'])
     * @method Badge first(array|string $columns = ['*'])
     * @method Badge firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Badge firstOrCreate(array $attributes, array $values = [])
     * @method Badge firstOrFail(array $columns = ['*'])
     * @method Badge firstOrNew(array $attributes = [], array $values = [])
     * @method Badge firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Badge forceCreate(array $attributes)
     * @method _BadgeCollection|Badge[] fromQuery(string $query, array $bindings = [])
     * @method _BadgeCollection|Badge[] get(array|string $columns = ['*'])
     * @method Badge getModel()
     * @method Badge[] getModels(array|string $columns = ['*'])
     * @method _BadgeCollection|Badge[] hydrate(array $items)
     * @method Badge make(array $attributes = [])
     * @method Badge newModelInstance(array $attributes = [])
     * @method Badge updateOrCreate(array $attributes, array $values = [])
     */
    class _BadgeQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method Device shift()
     * @method Device pop()
     * @method Device get($key, $default = null)
     * @method Device pull($key, $default = null)
     * @method Device first(callable $callback = null, $default = null)
     * @method Device firstWhere(string $key, $operator = null, $value = null)
     * @method Device[] all()
     * @method Device last(callable $callback = null, $default = null)
     * @property-read _DeviceCollectionProxy $keyBy
     * @property-read _DeviceCollectionProxy $max
     * @property-read _DeviceCollectionProxy $partition
     * @property-read _DeviceCollectionProxy $average
     * @property-read _DeviceCollectionProxy $flatMap
     * @property-read _DeviceCollectionProxy $each
     * @property-read _DeviceCollectionProxy $some
     * @property-read _DeviceCollectionProxy $map
     * @property-read _DeviceCollectionProxy $sortByDesc
     * @property-read _DeviceCollectionProxy $filter
     * @property-read _DeviceCollectionProxy $avg
     * @property-read _DeviceCollectionProxy $unique
     * @property-read _DeviceCollectionProxy $first
     * @property-read _DeviceCollectionProxy $min
     * @property-read _DeviceCollectionProxy $groupBy
     * @property-read _DeviceCollectionProxy $reject
     * @property-read _DeviceCollectionProxy $sortBy
     * @property-read _DeviceCollectionProxy $contains
     * @property-read _DeviceCollectionProxy $sum
     * @property-read _DeviceCollectionProxy $until
     * @property-read _DeviceCollectionProxy $every
     */
    class _DeviceCollection extends _BaseCollection
    {
        /**
         * @param int $size
         * @return Device[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _DeviceCollection|mixed $id
     * @property _DeviceCollection|mixed $name
     * @property _DeviceCollection|mixed $description
     * @property _DeviceCollection|mixed $serial
     * @property _DeviceCollection|mixed $ip
     * @property _DeviceCollection|mixed $x
     * @property _DeviceCollection|mixed $y
     * @property _DeviceCollection|mixed $level
     * @property _DeviceCollection|mixed $map_id
     * @property _DeviceCollection|mixed $status_id
     * @property _DeviceCollection|mixed $created_at
     * @property _DeviceCollection|mixed $updated_at
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _DeviceCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _DeviceCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _DeviceCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _DeviceCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _DeviceCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _DeviceCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _DeviceCollection delete()
     */
    class _DeviceCollectionProxy
    {
    }

    /**
     * @method _DeviceQueryBuilder whereId($value)
     * @method _DeviceQueryBuilder whereName($value)
     * @method _DeviceQueryBuilder whereDescription($value)
     * @method _DeviceQueryBuilder whereSerial($value)
     * @method _DeviceQueryBuilder whereIp($value)
     * @method _DeviceQueryBuilder whereX($value)
     * @method _DeviceQueryBuilder whereY($value)
     * @method _DeviceQueryBuilder whereLevel($value)
     * @method _DeviceQueryBuilder whereMapId($value)
     * @method _DeviceQueryBuilder whereStatusId($value)
     * @method _DeviceQueryBuilder whereCreatedAt($value)
     * @method _DeviceQueryBuilder whereUpdatedAt($value)
     * @method Device create(array $attributes = [])
     * @method _DeviceCollection|Device[] cursor()
     * @method Device|null find($id, array $columns = ['*'])
     * @method _DeviceCollection|Device[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Device findOrFail($id, array $columns = ['*'])
     * @method _DeviceCollection|Device[] findOrNew($id, array $columns = ['*'])
     * @method Device first(array|string $columns = ['*'])
     * @method Device firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Device firstOrCreate(array $attributes, array $values = [])
     * @method Device firstOrFail(array $columns = ['*'])
     * @method Device firstOrNew(array $attributes = [], array $values = [])
     * @method Device firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Device forceCreate(array $attributes)
     * @method _DeviceCollection|Device[] fromQuery(string $query, array $bindings = [])
     * @method _DeviceCollection|Device[] get(array|string $columns = ['*'])
     * @method Device getModel()
     * @method Device[] getModels(array|string $columns = ['*'])
     * @method _DeviceCollection|Device[] hydrate(array $items)
     * @method Device make(array $attributes = [])
     * @method Device newModelInstance(array $attributes = [])
     * @method Device updateOrCreate(array $attributes, array $values = [])
     */
    class _DeviceQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method Employee shift()
     * @method Employee pop()
     * @method Employee get($key, $default = null)
     * @method Employee pull($key, $default = null)
     * @method Employee first(callable $callback = null, $default = null)
     * @method Employee firstWhere(string $key, $operator = null, $value = null)
     * @method Employee[] all()
     * @method Employee last(callable $callback = null, $default = null)
     * @property-read _EmployeeCollectionProxy $keyBy
     * @property-read _EmployeeCollectionProxy $max
     * @property-read _EmployeeCollectionProxy $partition
     * @property-read _EmployeeCollectionProxy $average
     * @property-read _EmployeeCollectionProxy $flatMap
     * @property-read _EmployeeCollectionProxy $each
     * @property-read _EmployeeCollectionProxy $some
     * @property-read _EmployeeCollectionProxy $map
     * @property-read _EmployeeCollectionProxy $sortByDesc
     * @property-read _EmployeeCollectionProxy $filter
     * @property-read _EmployeeCollectionProxy $avg
     * @property-read _EmployeeCollectionProxy $unique
     * @property-read _EmployeeCollectionProxy $first
     * @property-read _EmployeeCollectionProxy $min
     * @property-read _EmployeeCollectionProxy $groupBy
     * @property-read _EmployeeCollectionProxy $reject
     * @property-read _EmployeeCollectionProxy $sortBy
     * @property-read _EmployeeCollectionProxy $contains
     * @property-read _EmployeeCollectionProxy $sum
     * @property-read _EmployeeCollectionProxy $until
     * @property-read _EmployeeCollectionProxy $every
     */
    class _EmployeeCollection extends _BaseCollection
    {
        /**
         * @param int $size
         * @return Employee[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _EmployeeCollection|mixed $id
     * @property _EmployeeCollection|mixed $first_name
     * @property _EmployeeCollection|mixed $last_name
     * @property _EmployeeCollection|mixed $id_number
     * @property _EmployeeCollection|mixed $img_path
     * @property _EmployeeCollection|mixed $created_at
     * @property _EmployeeCollection|mixed $updated_at
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _EmployeeCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _EmployeeCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _EmployeeCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _EmployeeCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _EmployeeCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _EmployeeCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _EmployeeCollection delete()
     */
    class _EmployeeCollectionProxy
    {
    }

    /**
     * @method _EmployeeQueryBuilder whereId($value)
     * @method _EmployeeQueryBuilder whereFirstName($value)
     * @method _EmployeeQueryBuilder whereLastName($value)
     * @method _EmployeeQueryBuilder whereIdNumber($value)
     * @method _EmployeeQueryBuilder whereImgPath($value)
     * @method _EmployeeQueryBuilder whereCreatedAt($value)
     * @method _EmployeeQueryBuilder whereUpdatedAt($value)
     * @method Employee create(array $attributes = [])
     * @method _EmployeeCollection|Employee[] cursor()
     * @method Employee|null find($id, array $columns = ['*'])
     * @method _EmployeeCollection|Employee[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Employee findOrFail($id, array $columns = ['*'])
     * @method _EmployeeCollection|Employee[] findOrNew($id, array $columns = ['*'])
     * @method Employee first(array|string $columns = ['*'])
     * @method Employee firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Employee firstOrCreate(array $attributes, array $values = [])
     * @method Employee firstOrFail(array $columns = ['*'])
     * @method Employee firstOrNew(array $attributes = [], array $values = [])
     * @method Employee firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Employee forceCreate(array $attributes)
     * @method _EmployeeCollection|Employee[] fromQuery(string $query, array $bindings = [])
     * @method _EmployeeCollection|Employee[] get(array|string $columns = ['*'])
     * @method Employee getModel()
     * @method Employee[] getModels(array|string $columns = ['*'])
     * @method _EmployeeCollection|Employee[] hydrate(array $items)
     * @method Employee make(array $attributes = [])
     * @method Employee newModelInstance(array $attributes = [])
     * @method Employee updateOrCreate(array $attributes, array $values = [])
     */
    class _EmployeeQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method Event shift()
     * @method Event pop()
     * @method Event get($key, $default = null)
     * @method Event pull($key, $default = null)
     * @method Event first(callable $callback = null, $default = null)
     * @method Event firstWhere(string $key, $operator = null, $value = null)
     * @method Event[] all()
     * @method Event last(callable $callback = null, $default = null)
     * @property-read _EventCollectionProxy $keyBy
     * @property-read _EventCollectionProxy $max
     * @property-read _EventCollectionProxy $partition
     * @property-read _EventCollectionProxy $average
     * @property-read _EventCollectionProxy $flatMap
     * @property-read _EventCollectionProxy $each
     * @property-read _EventCollectionProxy $some
     * @property-read _EventCollectionProxy $map
     * @property-read _EventCollectionProxy $sortByDesc
     * @property-read _EventCollectionProxy $filter
     * @property-read _EventCollectionProxy $avg
     * @property-read _EventCollectionProxy $unique
     * @property-read _EventCollectionProxy $first
     * @property-read _EventCollectionProxy $min
     * @property-read _EventCollectionProxy $groupBy
     * @property-read _EventCollectionProxy $reject
     * @property-read _EventCollectionProxy $sortBy
     * @property-read _EventCollectionProxy $contains
     * @property-read _EventCollectionProxy $sum
     * @property-read _EventCollectionProxy $until
     * @property-read _EventCollectionProxy $every
     */
    class _EventCollection extends _BaseCollection
    {
        /**
         * @param int $size
         * @return Event[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _EventCollection|mixed $id
     * @property _EventCollection|mixed $type_id
     * @property _EventCollection|mixed $employee_id
     * @property _EventCollection|mixed $device_id
     * @property _EventCollection|mixed $created_at
     * @property _EventCollection|mixed $updated_at
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _EventCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _EventCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _EventCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _EventCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _EventCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _EventCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _EventCollection delete()
     */
    class _EventCollectionProxy
    {
    }

    /**
     * @method _EventQueryBuilder whereId($value)
     * @method _EventQueryBuilder whereTypeId($value)
     * @method _EventQueryBuilder whereEmployeeId($value)
     * @method _EventQueryBuilder whereDeviceId($value)
     * @method _EventQueryBuilder whereCreatedAt($value)
     * @method _EventQueryBuilder whereUpdatedAt($value)
     * @method Event create(array $attributes = [])
     * @method _EventCollection|Event[] cursor()
     * @method Event|null find($id, array $columns = ['*'])
     * @method _EventCollection|Event[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Event findOrFail($id, array $columns = ['*'])
     * @method _EventCollection|Event[] findOrNew($id, array $columns = ['*'])
     * @method Event first(array|string $columns = ['*'])
     * @method Event firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Event firstOrCreate(array $attributes, array $values = [])
     * @method Event firstOrFail(array $columns = ['*'])
     * @method Event firstOrNew(array $attributes = [], array $values = [])
     * @method Event firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Event forceCreate(array $attributes)
     * @method _EventCollection|Event[] fromQuery(string $query, array $bindings = [])
     * @method _EventCollection|Event[] get(array|string $columns = ['*'])
     * @method Event getModel()
     * @method Event[] getModels(array|string $columns = ['*'])
     * @method _EventCollection|Event[] hydrate(array $items)
     * @method Event make(array $attributes = [])
     * @method Event newModelInstance(array $attributes = [])
     * @method Event updateOrCreate(array $attributes, array $values = [])
     */
    class _EventQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method EventType shift()
     * @method EventType pop()
     * @method EventType get($key, $default = null)
     * @method EventType pull($key, $default = null)
     * @method EventType first(callable $callback = null, $default = null)
     * @method EventType firstWhere(string $key, $operator = null, $value = null)
     * @method EventType[] all()
     * @method EventType last(callable $callback = null, $default = null)
     * @property-read _EventTypeCollectionProxy $keyBy
     * @property-read _EventTypeCollectionProxy $max
     * @property-read _EventTypeCollectionProxy $partition
     * @property-read _EventTypeCollectionProxy $average
     * @property-read _EventTypeCollectionProxy $flatMap
     * @property-read _EventTypeCollectionProxy $each
     * @property-read _EventTypeCollectionProxy $some
     * @property-read _EventTypeCollectionProxy $map
     * @property-read _EventTypeCollectionProxy $sortByDesc
     * @property-read _EventTypeCollectionProxy $filter
     * @property-read _EventTypeCollectionProxy $avg
     * @property-read _EventTypeCollectionProxy $unique
     * @property-read _EventTypeCollectionProxy $first
     * @property-read _EventTypeCollectionProxy $min
     * @property-read _EventTypeCollectionProxy $groupBy
     * @property-read _EventTypeCollectionProxy $reject
     * @property-read _EventTypeCollectionProxy $sortBy
     * @property-read _EventTypeCollectionProxy $contains
     * @property-read _EventTypeCollectionProxy $sum
     * @property-read _EventTypeCollectionProxy $until
     * @property-read _EventTypeCollectionProxy $every
     */
    class _EventTypeCollection extends _BaseCollection
    {
        /**
         * @param int $size
         * @return EventType[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _EventTypeCollection|mixed $id
     * @property _EventTypeCollection|mixed $name
     * @property _EventTypeCollection|mixed $description
     * @property _EventTypeCollection|mixed $created_at
     * @property _EventTypeCollection|mixed $updated_at
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _EventTypeCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _EventTypeCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _EventTypeCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _EventTypeCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _EventTypeCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _EventTypeCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _EventTypeCollection delete()
     */
    class _EventTypeCollectionProxy
    {
    }

    /**
     * @method _EventTypeQueryBuilder whereId($value)
     * @method _EventTypeQueryBuilder whereName($value)
     * @method _EventTypeQueryBuilder whereDescription($value)
     * @method _EventTypeQueryBuilder whereCreatedAt($value)
     * @method _EventTypeQueryBuilder whereUpdatedAt($value)
     * @method EventType create(array $attributes = [])
     * @method _EventTypeCollection|EventType[] cursor()
     * @method EventType|null find($id, array $columns = ['*'])
     * @method _EventTypeCollection|EventType[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method EventType findOrFail($id, array $columns = ['*'])
     * @method _EventTypeCollection|EventType[] findOrNew($id, array $columns = ['*'])
     * @method EventType first(array|string $columns = ['*'])
     * @method EventType firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method EventType firstOrCreate(array $attributes, array $values = [])
     * @method EventType firstOrFail(array $columns = ['*'])
     * @method EventType firstOrNew(array $attributes = [], array $values = [])
     * @method EventType firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method EventType forceCreate(array $attributes)
     * @method _EventTypeCollection|EventType[] fromQuery(string $query, array $bindings = [])
     * @method _EventTypeCollection|EventType[] get(array|string $columns = ['*'])
     * @method EventType getModel()
     * @method EventType[] getModels(array|string $columns = ['*'])
     * @method _EventTypeCollection|EventType[] hydrate(array $items)
     * @method EventType make(array $attributes = [])
     * @method EventType newModelInstance(array $attributes = [])
     * @method EventType updateOrCreate(array $attributes, array $values = [])
     */
    class _EventTypeQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method Map shift()
     * @method Map pop()
     * @method Map get($key, $default = null)
     * @method Map pull($key, $default = null)
     * @method Map first(callable $callback = null, $default = null)
     * @method Map firstWhere(string $key, $operator = null, $value = null)
     * @method Map[] all()
     * @method Map last(callable $callback = null, $default = null)
     * @property-read _MapCollectionProxy $keyBy
     * @property-read _MapCollectionProxy $max
     * @property-read _MapCollectionProxy $partition
     * @property-read _MapCollectionProxy $average
     * @property-read _MapCollectionProxy $flatMap
     * @property-read _MapCollectionProxy $each
     * @property-read _MapCollectionProxy $some
     * @property-read _MapCollectionProxy $map
     * @property-read _MapCollectionProxy $sortByDesc
     * @property-read _MapCollectionProxy $filter
     * @property-read _MapCollectionProxy $avg
     * @property-read _MapCollectionProxy $unique
     * @property-read _MapCollectionProxy $first
     * @property-read _MapCollectionProxy $min
     * @property-read _MapCollectionProxy $groupBy
     * @property-read _MapCollectionProxy $reject
     * @property-read _MapCollectionProxy $sortBy
     * @property-read _MapCollectionProxy $contains
     * @property-read _MapCollectionProxy $sum
     * @property-read _MapCollectionProxy $until
     * @property-read _MapCollectionProxy $every
     */
    class _MapCollection extends _BaseCollection
    {
        /**
         * @param int $size
         * @return Map[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _MapCollection|mixed $id
     * @property _MapCollection|mixed $name
     * @property _MapCollection|mixed $path
     * @property _MapCollection|mixed $width
     * @property _MapCollection|mixed $height
     * @property _MapCollection|mixed $created_at
     * @property _MapCollection|mixed $updated_at
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _MapCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _MapCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _MapCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _MapCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _MapCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _MapCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _MapCollection delete()
     */
    class _MapCollectionProxy
    {
    }

    /**
     * @method _MapQueryBuilder whereId($value)
     * @method _MapQueryBuilder whereName($value)
     * @method _MapQueryBuilder wherePath($value)
     * @method _MapQueryBuilder whereWidth($value)
     * @method _MapQueryBuilder whereHeight($value)
     * @method _MapQueryBuilder whereCreatedAt($value)
     * @method _MapQueryBuilder whereUpdatedAt($value)
     * @method Map create(array $attributes = [])
     * @method _MapCollection|Map[] cursor()
     * @method Map|null find($id, array $columns = ['*'])
     * @method _MapCollection|Map[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Map findOrFail($id, array $columns = ['*'])
     * @method _MapCollection|Map[] findOrNew($id, array $columns = ['*'])
     * @method Map first(array|string $columns = ['*'])
     * @method Map firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Map firstOrCreate(array $attributes, array $values = [])
     * @method Map firstOrFail(array $columns = ['*'])
     * @method Map firstOrNew(array $attributes = [], array $values = [])
     * @method Map firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Map forceCreate(array $attributes)
     * @method _MapCollection|Map[] fromQuery(string $query, array $bindings = [])
     * @method _MapCollection|Map[] get(array|string $columns = ['*'])
     * @method Map getModel()
     * @method Map[] getModels(array|string $columns = ['*'])
     * @method _MapCollection|Map[] hydrate(array $items)
     * @method Map make(array $attributes = [])
     * @method Map newModelInstance(array $attributes = [])
     * @method Map updateOrCreate(array $attributes, array $values = [])
     */
    class _MapQueryBuilder extends _BaseBuilder
    {
    }

    /**
     * @method Status shift()
     * @method Status pop()
     * @method Status get($key, $default = null)
     * @method Status pull($key, $default = null)
     * @method Status first(callable $callback = null, $default = null)
     * @method Status firstWhere(string $key, $operator = null, $value = null)
     * @method Status[] all()
     * @method Status last(callable $callback = null, $default = null)
     * @property-read _StatusCollectionProxy $keyBy
     * @property-read _StatusCollectionProxy $max
     * @property-read _StatusCollectionProxy $partition
     * @property-read _StatusCollectionProxy $average
     * @property-read _StatusCollectionProxy $flatMap
     * @property-read _StatusCollectionProxy $each
     * @property-read _StatusCollectionProxy $some
     * @property-read _StatusCollectionProxy $map
     * @property-read _StatusCollectionProxy $sortByDesc
     * @property-read _StatusCollectionProxy $filter
     * @property-read _StatusCollectionProxy $avg
     * @property-read _StatusCollectionProxy $unique
     * @property-read _StatusCollectionProxy $first
     * @property-read _StatusCollectionProxy $min
     * @property-read _StatusCollectionProxy $groupBy
     * @property-read _StatusCollectionProxy $reject
     * @property-read _StatusCollectionProxy $sortBy
     * @property-read _StatusCollectionProxy $contains
     * @property-read _StatusCollectionProxy $sum
     * @property-read _StatusCollectionProxy $until
     * @property-read _StatusCollectionProxy $every
     */
    class _StatusCollection extends _BaseCollection
    {
        /**
         * @param int $size
         * @return Status[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _StatusCollection|mixed $id
     * @property _StatusCollection|mixed $name
     * @property _StatusCollection|mixed $description
     * @property _StatusCollection|mixed $created_at
     * @property _StatusCollection|mixed $updated_at
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _StatusCollection update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _StatusCollection save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _StatusCollection increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _StatusCollection decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _StatusCollection touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _StatusCollection fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _StatusCollection delete()
     */
    class _StatusCollectionProxy
    {
    }

    /**
     * @method _StatusQueryBuilder whereId($value)
     * @method _StatusQueryBuilder whereName($value)
     * @method _StatusQueryBuilder whereDescription($value)
     * @method _StatusQueryBuilder whereCreatedAt($value)
     * @method _StatusQueryBuilder whereUpdatedAt($value)
     * @method Status create(array $attributes = [])
     * @method _StatusCollection|Status[] cursor()
     * @method Status|null find($id, array $columns = ['*'])
     * @method _StatusCollection|Status[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Status findOrFail($id, array $columns = ['*'])
     * @method _StatusCollection|Status[] findOrNew($id, array $columns = ['*'])
     * @method Status first(array|string $columns = ['*'])
     * @method Status firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Status firstOrCreate(array $attributes, array $values = [])
     * @method Status firstOrFail(array $columns = ['*'])
     * @method Status firstOrNew(array $attributes = [], array $values = [])
     * @method Status firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Status forceCreate(array $attributes)
     * @method _StatusCollection|Status[] fromQuery(string $query, array $bindings = [])
     * @method _StatusCollection|Status[] get(array|string $columns = ['*'])
     * @method Status getModel()
     * @method Status[] getModels(array|string $columns = ['*'])
     * @method _StatusCollection|Status[] hydrate(array $items)
     * @method Status make(array $attributes = [])
     * @method Status newModelInstance(array $attributes = [])
     * @method Status updateOrCreate(array $attributes, array $values = [])
     */
    class _StatusQueryBuilder extends _BaseBuilder
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
         * @param int $size
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
     * @see \Illuminate\Notifications\RoutesNotifications::routeNotificationFor
     * @method _UserCollection routeNotificationFor(string $driver, Notification|null $notification = null)
     * @see \Illuminate\Notifications\RoutesNotifications::notifyNow
     * @method _UserCollection notifyNow($instance, array $channels = null)
     * @see \Illuminate\Notifications\RoutesNotifications::notify
     * @method _UserCollection notify($instance)
     * @see \Illuminate\Notifications\HasDatabaseNotifications::unreadNotifications
     * @method _UserCollection unreadNotifications()
     * @see \Illuminate\Notifications\HasDatabaseNotifications::readNotifications
     * @method _UserCollection readNotifications()
     * @see \Illuminate\Auth\MustVerifyEmail::hasVerifiedEmail
     * @method _UserCollection hasVerifiedEmail()
     * @see \Illuminate\Auth\MustVerifyEmail::getEmailForVerification
     * @method _UserCollection getEmailForVerification()
     * @see \Illuminate\Auth\MustVerifyEmail::sendEmailVerificationNotification
     * @method _UserCollection sendEmailVerificationNotification()
     * @see \Illuminate\Auth\MustVerifyEmail::markEmailAsVerified
     * @method _UserCollection markEmailAsVerified()
     * @see \Illuminate\Auth\Authenticatable::setRememberToken
     * @method _UserCollection setRememberToken(string $value)
     * @see \Illuminate\Auth\Authenticatable::getRememberTokenName
     * @method _UserCollection getRememberTokenName()
     * @see \Illuminate\Auth\Authenticatable::getAuthIdentifierName
     * @method _UserCollection getAuthIdentifierName()
     * @see \Illuminate\Auth\Authenticatable::getAuthPassword
     * @method _UserCollection getAuthPassword()
     * @see \Illuminate\Auth\Authenticatable::getRememberToken
     * @method _UserCollection getRememberToken()
     * @see \Illuminate\Auth\Authenticatable::getAuthIdentifier
     * @method _UserCollection getAuthIdentifier()
     * @see \Illuminate\Foundation\Auth\Access\Authorizable::cannot
     * @method _UserCollection cannot(iterable|string $abilities, array $arguments = [])
     * @see \Illuminate\Foundation\Auth\Access\Authorizable::can
     * @method _UserCollection can(iterable|string $abilities, array $arguments = [])
     * @see \Illuminate\Foundation\Auth\Access\Authorizable::cant
     * @method _UserCollection cant(iterable|string $abilities, array $arguments = [])
     * @see \Illuminate\Auth\Passwords\CanResetPassword::getEmailForPasswordReset
     * @method _UserCollection getEmailForPasswordReset()
     * @see \Illuminate\Auth\Passwords\CanResetPassword::sendPasswordResetNotification
     * @method _UserCollection sendPasswordResetNotification(string $token)
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
         * @param int $size
         * @return DatabaseNotification[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @property _DatabaseNotificationCollection|mixed $notifiable
     * @see \Illuminate\Notifications\DatabaseNotification::markAsRead
     * @method _DatabaseNotificationCollection markAsRead()
     * @see \Illuminate\Notifications\DatabaseNotification::newCollection
     * @method _DatabaseNotificationCollection newCollection(array $models = [])
     * @see \Illuminate\Notifications\DatabaseNotification::unread
     * @method _DatabaseNotificationCollection unread()
     * @see \Illuminate\Notifications\DatabaseNotification::read
     * @method _DatabaseNotificationCollection read()
     * @see \Illuminate\Notifications\DatabaseNotification::markAsUnread
     * @method _DatabaseNotificationCollection markAsUnread()
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
